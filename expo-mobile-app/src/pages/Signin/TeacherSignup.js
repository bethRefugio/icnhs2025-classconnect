import React, { useState, useEffect } from 'react';
import { View, Text, TextInput, TouchableOpacity, StyleSheet, Alert, ScrollView } from 'react-native';
import DropDownPicker from 'react-native-dropdown-picker';
import axios from 'axios';

const API_URL = 'http://192.168.73.232:8000/api';

const TeacherSignup = ({ route, navigation }) => {
  const { account_id } = route.params || {};

  // Form state
  const [name, setName] = useState('');
  const [email, setEmail] = useState('');
  const [contactNo, setContactNo] = useState('');
  const [password, setPassword] = useState('');

  // Dropdown state
  const [department, setDepartment] = useState(null);
  const [departments, setDepartments] = useState([]);
  const [departmentOpen, setDepartmentOpen] = useState(false);

  const [building, setBuilding] = useState(null);
  const [buildings, setBuildings] = useState([]);
  const [buildingOpen, setBuildingOpen] = useState(false);

  const [floor, setFloor] = useState(null);
  const [floors, setFloors] = useState([]);
  const [floorOpen, setFloorOpen] = useState(false);

  const [classroom, setClassroom] = useState(null);
  const [classrooms, setClassrooms] = useState([]);
  const [classroomOpen, setClassroomOpen] = useState(false);

  const [subjects, setSubjects] = useState([]);
  const [selectedSubjects, setSelectedSubjects] = useState([]);
  const [subjectOpen, setSubjectOpen] = useState(false);

  // Fetch dropdown data
  useEffect(() => {
    const fetchData = async () => {
      try {
        const [deptRes, subjRes, bldgRes, roomRes] = await Promise.all([
          axios.get(`${API_URL}/departments`),
          axios.get(`${API_URL}/subjects`),
          axios.get(`${API_URL}/buildings`),
          axios.get(`${API_URL}/classrooms`)
        ]);
        setDepartments(deptRes.data.departments.map(d => ({ label: d.name, value: d.id })));
        setSubjects(subjRes.data.subjects.map(s => ({ label: s.subject_name || s.name, value: s.id })));
        setBuildings(bldgRes.data.buildings.map(b => ({
          label: b.name,
          value: b.id,
          no_of_floors: b.no_of_floors
        })));
        setClassrooms(roomRes.data.classrooms);
      } catch (e) {
        console.log('Dropdown fetch error:', e.response ? e.response.data : e.message);
        Alert.alert('Error', 'Failed to load dropdown data');
      }
    };
    fetchData();
  }, []);

  // Update floors when building changes
  useEffect(() => {
    if (building) {
      const selectedBuilding = buildings.find(b => b.value === building);
      if (selectedBuilding) {
        setFloors(Array.from({ length: selectedBuilding.no_of_floors }, (_, i) => ({
          label: `Floor ${i + 1}`,
          value: i + 1
        })));
      } else {
        setFloors([]);
      }
    } else {
      setFloors([]);
    }
    setFloor(null);
    setClassroom(null);
  }, [building]);

  // Filter classrooms by building and floor
  const filteredClassrooms = classrooms.filter(
    c => c.building_id === building && c.floor_no === floor
  ).map(r => ({ label: r.room_no, value: r.id }));

  // Submit handler
  const handleSubmit = async () => {
    if (!name || !email || !password || !department || !building || !floor || !classroom || selectedSubjects.length === 0) {
      Alert.alert('Error', 'Please fill all required fields.');
      return;
    }
    try {
      // 1. Register user
      const userRes = await axios.post(`${API_URL}/register`, {
        name, email, password, account_id
      });
      const user_id = userRes.data.user.id;

      // 2. Create teacher
      const teacherRes = await axios.post(`${API_URL}/teachers`, {
        user_id,
        name,
        email,
        contact_no: contactNo,
        department_id: department,
        classroom_id: classroom,
      });
      const teacher_id = teacherRes.data.teacher.id;

      // 3. Assign subjects
      await axios.post(`${API_URL}/subject_teacher`, {
        teacher_id,
        subject_ids: selectedSubjects,
      });

      Alert.alert('Success', 'Teacher account created!');
      navigation.navigate('Login');
    } catch (error) {
      Alert.alert('Error', 'Failed to create teacher account.');
    }
  };

  return (
    <ScrollView style={{ flex: 1, backgroundColor: '#fff' }} contentContainerStyle={{ padding: 20 }}>
      <Text style={styles.title}>Sign in</Text>
      <Text style={styles.subtitle}>Teacher</Text>
      <Text style={styles.label}>Name</Text>
      <TextInput style={styles.input} value={name} onChangeText={setName} />
      <Text style={styles.label}>Email</Text>
      <TextInput style={styles.input} value={email} onChangeText={setEmail} keyboardType="email-address" />
      <Text style={styles.label}>Contact Number</Text>
      <TextInput style={styles.input} value={contactNo} onChangeText={setContactNo} keyboardType="phone-pad" />

      <Text style={styles.label}>Department</Text>
        <View style={{ zIndex: 3000 }}>
          <DropDownPicker
            open={departmentOpen}
            value={department}
            items={departments}
            setOpen={setDepartmentOpen}
            setValue={setDepartment}
            setItems={setDepartments}
            placeholder="Select Department"
            style={styles.dropdown}
            dropDownContainerStyle={styles.dropdownContainer}
            listMode="SCROLLVIEW"
            zIndex={5000}
          />
        </View>

      <Text style={styles.label}>Building</Text>
        <View style={{ zIndex: 3000 }}>
          <DropDownPicker
            open={buildingOpen}
            value={building}
            items={buildings}
            setOpen={setBuildingOpen}
            setValue={setBuilding}
            setItems={setBuildings}
            placeholder="Select Building"
            style={styles.dropdown}
            dropDownContainerStyle={styles.dropdownContainer}
            listMode="SCROLLVIEW"
            zIndex={4000}
          />
        </View>

      <Text style={styles.label}>Floor</Text>
        <View style={{ zIndex: 3000 }}>
          <DropDownPicker
            open={floorOpen}
            value={floor}
            items={floors}
            setOpen={setFloorOpen}
            setValue={setFloor}
            setItems={setFloors}
            placeholder="Select Floor"
            style={styles.dropdown}
            dropDownContainerStyle={styles.dropdownContainer}
            disabled={!building}
            listMode="SCROLLVIEW"
            zIndex={3000}
          />
        </View>

      <Text style={styles.label}>Classroom</Text>
      <View style={{ zIndex: 3000 }}>
          <DropDownPicker
            open={classroomOpen}
            value={classroom}
            items={filteredClassrooms}
            setOpen={setClassroomOpen}
            setValue={setClassroom}
            setItems={() => {}}
            placeholder="Select Classroom"
            style={styles.dropdown}
            dropDownContainerStyle={styles.dropdownContainer}
            disabled={!floor}
            listMode="SCROLLVIEW"
            zIndex={2000}
          />
      </View>

      <Text style={styles.label}>Subject</Text>
        <View style={{ zIndex: 3000 }}>
          <DropDownPicker
            multiple={true}
            open={subjectOpen}
            value={selectedSubjects}
            items={subjects}
            setOpen={setSubjectOpen}
            setValue={setSelectedSubjects}
            setItems={setSubjects}
            placeholder="Select Subject(s)"
            style={styles.dropdown}
            dropDownContainerStyle={styles.dropdownContainer}
            listMode="SCROLLVIEW"
            zIndex={1000}
          />
        </View>

      <Text style={styles.label}>Password</Text>
      <TextInput style={styles.input} value={password} onChangeText={setPassword} secureTextEntry />

      <TouchableOpacity style={styles.button} onPress={handleSubmit}>
        <Text style={styles.buttonText}>Sign in</Text>
      </TouchableOpacity>
      <TouchableOpacity onPress={() => navigation.navigate('Login')}>
        <Text style={styles.link}>Already have an account? Log in</Text>
      </TouchableOpacity>
    </ScrollView>
  );
};

const styles = StyleSheet.create({
  title: { fontSize: 28, fontWeight: 'bold', color: '#295393', marginTop: 20, textAlign: 'left' },
  subtitle: { fontSize: 22, fontWeight: 'bold', color: '#295393', marginBottom: 20, textAlign: 'center' },
  label: { color: '#223263', fontWeight: 'bold', marginBottom: 5, marginTop: 10, fontSize: 16 },
  input: {
    backgroundColor: '#F4F4F4',
    borderRadius: 12,
    borderWidth: 1,
    borderColor: '#D1D5DB',
    marginBottom: 10,
    paddingHorizontal: 10,
    height: 48,
    fontSize: 16,
    color: '#223263',
  },
  dropdown: {
    backgroundColor: '#F4F4F4',
    borderRadius: 12,
    borderWidth: 1,
    borderColor: '#D1D5DB',
    marginBottom: 10,
    paddingHorizontal: 10,
    minHeight: 48,
  },
  dropdownContainer: {
    borderColor: '#D1D5DB',
    borderRadius: 12,
    zIndex: 1000,
  },
  button: {
    backgroundColor: '#295393',
    paddingVertical: 15,
    borderRadius: 12,
    alignItems: 'center',
    marginTop: 20,
  },
  buttonText: { color: '#fff', fontWeight: 'bold', fontSize: 18 },
  link: {
    color: '#223263',
    marginTop: 18,
    textAlign: 'center',
    fontSize: 15,
    textDecorationLine: 'underline',
  },
});

export default TeacherSignup;
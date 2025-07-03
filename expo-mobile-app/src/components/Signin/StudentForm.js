import React, { useState, useEffect } from 'react';
import { View, Text, TextInput, TouchableOpacity, StyleSheet, ScrollView, Alert } from 'react-native';
import { Picker } from '@react-native-picker/picker';
import axios from 'axios';
import { API_URL } from '../../../config';

const StudentSignup = ({ route, navigation }) => {
  const { account_id } = route.params || {};

  // Form state
  const [name, setName] = useState('');
  const [email, setEmail] = useState('');
  const [LRN, setLRN] = useState('');
  const [year_level, setYearLevel] = useState('');
  const [contactNo, setContactNo] = useState('');
  const [password, setPassword] = useState('');

  // Dropdown state
  const [teachers, setTeachers] = useState([]);
  const [teacher, setTeacher] = useState();

  const [buildings, setBuildings] = useState([]);
  const [building, setBuilding] = useState();

  const [floors, setFloors] = useState([]);
  const [floor, setFloor] = useState();

  const [classrooms, setClassrooms] = useState([]);
  const [classroom, setClassroom] = useState();

  // Fetch dropdown data
  useEffect(() => {
    const fetchData = async () => {
      try {
        const [ teacherRes, bldgRes, roomRes] = await Promise.all([
          axios.get(`${API_URL}/teachers`),
          axios.get(`${API_URL}/buildings`),
          axios.get(`${API_URL}/classrooms`)
        ]);
        setTeachers(teacherRes.data.teachers);
        setBuildings(bldgRes.data.buildings);
        setClassrooms(roomRes.data.classrooms);
      } catch (e) {
        Alert.alert('Error', 'Failed to load dropdown data');
      }
    };
    fetchData();
  }, []);

  // Update floors when building changes
  useEffect(() => {
    setFloor(undefined);
    setClassroom(undefined);
    if (building) {
      const selectedBuilding = buildings.find(b => String(b.id) === String(building));
      if (selectedBuilding && selectedBuilding.no_of_floors) {
        setFloors(Array.from({ length: parseInt(selectedBuilding.no_of_floors) }, (_, i) => (i + 1).toString()));
      } else {
        setFloors([]);
      }
    } else {
      setFloors([]);
    }
  }, [building, buildings]);

  // Update classroom when floor changes
  useEffect(() => {
    setClassroom(undefined);
  }, [floor]);

  // Filter classrooms by building and floor (all as strings for safety)
  const filteredClassrooms = classrooms.filter(
    c =>
      String(c.building_id) === String(building) &&
      String(c.floor_no) === String(floor)
  );

  // Submit handler (same as before)
  const handleSubmit = async () => {
    if (!name || !email || !password || !department || !building || !floor || !classroom || !subject) {
      Alert.alert('Error', 'Please fill all required fields.');
      return;
    }
    try {
      // 1. Register user
      const userRes = await axios.post(`${API_URL}/register`, {
        name,
        email,
        password,
        account_id, // if needed
      });
      const user_id = userRes.data.user.id;

      // 2. Create student
      const studentRes = await axios.post(`${API_URL}/students`, {
        user_id,
        name,
        email,
        contact_no: contactNo,
        LRN,
        year_level,
        room_id: classroom,
        adviser_id: teacher,
      });
      const student_id = studentRes.data.student.id;


      Alert.alert('Success', 'Student account created!');
      navigation.navigate('Login');
    } catch (error) {
      Alert.alert('Error', 'Failed to create student account.');
    }
  };

  return (
    <ScrollView style={{ flex: 1, backgroundColor: '#fff' }} contentContainerStyle={{ padding: 20 }}>
      <Text style={styles.title}>Sign in</Text>

      <Text style={styles.subtitle}>Student</Text>

      <Text style={styles.label}>Name</Text>
      <TextInput style={styles.input} value={name} onChangeText={setName} />
      
      <Text style={styles.label}>Email</Text>
      <TextInput style={styles.input} value={email} onChangeText={setEmail} keyboardType="email-address" />
      
      <Text style={styles.label}>Contact Number</Text>
      <TextInput style={styles.input} value={contactNo} onChangeText={setContactNo} keyboardType="phone-pad" />
      
      <Text style={styles.label}>LRN</Text>
      <TextInput style={styles.input} value={LRN} onChangeText={setLRN} />

      <Text style={styles.label}>Year Level</Text>
        <View style={styles.pickerContainer}>
        <Picker
            selectedValue={year_level}
            onValueChange={setYearLevel}
            style={styles.pickerStyle}
        >
            <Picker.Item label="Select Year Level" value={undefined} />
            {
            (() => {
                const items = [];
                for (let i = 7; i <= 12; i++) {
                items.push(
                    <Picker.Item label={`Grade ${i}`} value={i.toString()} key={i} />
                );
                }
                return items;
            })()
            }
        </Picker>
        </View>

      <Text style={styles.label}>Adviser</Text>
      <View style={styles.pickerContainer}>
        <Picker
          selectedValue={teacher}
          onValueChange={setTeacher}
          style={styles.pickerStyle}
        >
          <Picker.Item label="Select Adviser" value={undefined} />
          {teachers.map(d => (
            <Picker.Item label={d.name} value={d.id} key={d.id} />
          ))}
        </Picker>
      </View>

      <Text style={styles.label}>Building</Text>
      <View style={styles.pickerContainer}>
        <Picker
          selectedValue={building}
          onValueChange={value => setBuilding(value)}
          style={styles.pickerStyle}
        >
          <Picker.Item label="Select Building" value={undefined} />
          {buildings.map(b => (
            <Picker.Item label={b.name} value={b.id} key={b.id} />
          ))}
        </Picker>
      </View>

      <Text style={styles.label}>Floor</Text>
      <View style={styles.pickerContainer}>
        <Picker
          selectedValue={floor}
          onValueChange={value => setFloor(value)}
          style={styles.pickerStyle}
          enabled={!!building}
        >
          <Picker.Item label="Select Floor" value={undefined} />
          {floors.map(f => (
            <Picker.Item label={`Floor ${f}`} value={f} key={f} />
          ))}
        </Picker>
      </View>

      <Text style={styles.label}>Classroom</Text>
      <View style={styles.pickerContainer}>
        <Picker
          selectedValue={classroom}
          onValueChange={value => setClassroom(value)}
          style={styles.pickerStyle}
          enabled={!!floor}
        >
          <Picker.Item label="Select Classroom" value={undefined} />
          {filteredClassrooms.map(r => (
            <Picker.Item label={r.room_no} value={r.id} key={r.id} />
          ))}
        </Picker>
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
  pickerContainer: {
    borderWidth: 1,
    borderColor: '#D1D5DB',
    borderRadius: 12,
    backgroundColor: '#F4F4F4',
    marginBottom: 10,
    overflow: 'hidden',
  },
  pickerStyle: {
    height: 48,
    width: '100%',
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

export default StudentSignup;
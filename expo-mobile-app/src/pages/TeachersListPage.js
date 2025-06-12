import React, { useState, useEffect } from 'react';
import { View, Text, TextInput, ActivityIndicator, FlatList, StyleSheet, Image } from 'react-native';
import axios from 'axios';
import DropDownPicker from 'react-native-dropdown-picker';

const API_URL = 'http://192.168.73.232:8000/api';

const TeachersListPage = () => {
  const [teachers, setTeachers] = useState([]);
  const [departments, setDepartments] = useState([]);
  const [selectedDept, setSelectedDept] = useState('All');
  const [search, setSearch] = useState('');
  const [loading, setLoading] = useState(true);

  // Dropdown state
  const [open, setOpen] = useState(false);
  const [deptItems, setDeptItems] = useState([
    { label: 'All', value: 'All' }
  ]);

  useEffect(() => {
    const fetchData = async () => {
      try {
        const [teachersRes, deptsRes] = await Promise.all([
          axios.get(`${API_URL}/teachers`),
          axios.get(`${API_URL}/departments`)
        ]);
        setTeachers(teachersRes.data.teachers || teachersRes.data);
        const deptList = deptsRes.data.departments.map(d => ({
          label: d.name,
          value: d.name
        }));
        setDeptItems([{ label: 'All', value: 'All' }, ...deptList]);
        setDepartments(['All', ...deptsRes.data.departments.map(d => d.name)]);
      } catch (error) {
        console.error('Error fetching data:', error);
      } finally {
        setLoading(false);
      }
    };
    fetchData();
  }, []);

  // Filtered teachers
  const filteredTeachers = teachers.filter(t => {
    const matchesDept = selectedDept === 'All ' || t.department?.name === selectedDept;
    const matchesSearch = t.name.toLowerCase().includes(search.toLowerCase());
    return matchesDept && matchesSearch;
  });

  // Render teacher card
  const renderTeacher = ({ item }) => (
    <View style={styles.teacherCard}>
      <Image
        source={item.profile_pic ? { uri: item.profile_pic } : require('../../assets/default_user.png')}
        style={styles.teacherAvatar}
      />
      <Text style={styles.teacherName}>{item.name}</Text>
    </View>
  );

  if (loading) {
    return (
      <View style={styles.loadingContainer}>
        <ActivityIndicator size="large" color="#6366F1" />
        <Text style={styles.loadingText}>Loading teachers...</Text>
      </View>
    );
  }

  return (
    <View style={styles.container}>
      {/* Search Bar */}
      <View style={styles.searchContainer}>
        <TextInput
          style={styles.searchInput}
          placeholder="Search a Teacher"
          placeholderTextColor="#888"
          value={search}
          onChangeText={setSearch}
        />
      </View>

      {/* Department Dropdown */}
      <View style={{ zIndex: 1000, marginHorizontal: 16, marginBottom: 12 }}>
      <DropDownPicker
        open={open}
        value={selectedDept}
        items={deptItems}
        setOpen={setOpen}
        setValue={setSelectedDept}
        setItems={setDeptItems}
        searchable={false} // <-- disables search
        placeholder="Select Department"
        style={{
          backgroundColor: '#fff',
          borderColor: '#295393',
          borderRadius: 8,
          minHeight: 44,
        }}
        dropDownContainerStyle={{
          borderColor: '#295393',
          borderRadius: 8,
          maxHeight: 180, // <-- makes dropdown scrollable
        }}
        textStyle={{
          fontWeight: 'bold',
          color: '#295393',
        }}
      />
    </View>

      {/* Teachers Grid */}
      <FlatList
        data={filteredTeachers}
        keyExtractor={item => item.id.toString()}
        numColumns={2}
        contentContainerStyle={styles.grid}
        renderItem={renderTeacher}
        ListEmptyComponent={<Text style={styles.noResults}>No teachers found.</Text>}
      />
    </View>
  );
};

const styles = StyleSheet.create({
  container: { flex: 1, backgroundColor: '#f5f8ff', paddingTop: 16 },
  searchContainer: {
    marginHorizontal: 16,
    marginBottom: 8,
    backgroundColor: '#fff',
    borderRadius: 10,
    paddingHorizontal: 12,
    paddingVertical: 6,
    elevation: 2,
  },
  searchInput: { height: 40, color: '#222' },
  grid: { paddingHorizontal: 16, paddingBottom: 16 },
  teacherCard: {
    flex: 1,
    alignItems: 'center',
    margin: 8,
    backgroundColor: '#fff',
    borderRadius: 16,
    padding: 16,
    elevation: 2,
  },
  teacherAvatar: {
    width: 80,
    height: 80,
    borderRadius: 40,
    marginBottom: 8,
    backgroundColor: '#e0e7ff',
  },
  teacherName: { fontWeight: 'bold', color: '#295393', fontSize: 16, textAlign: 'center' },
  loadingContainer: { flex: 1, justifyContent: 'center', alignItems: 'center', backgroundColor: '#f5f8ff' },
  loadingText: { marginTop: 8, fontSize: 16, color: '#6366F1' },
  noResults: { textAlign: 'center', color: '#888', marginTop: 32, fontSize: 16 },
});

export default TeachersListPage;
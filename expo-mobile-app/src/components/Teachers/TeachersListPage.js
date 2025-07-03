import React, { useState, useEffect } from 'react';
import { View, Text, TextInput, ActivityIndicator, FlatList, StyleSheet, Image, ScrollView } from 'react-native';
import axios from 'axios';
import DropDownPicker from 'react-native-dropdown-picker';
import { Ionicons } from '@expo/vector-icons';
import { TouchableOpacity } from 'react-native';
import styles from './styles';
import { API_URL } from '../../../config'; 


const TeachersListPage = ({navigation}) => {
  const [teachers, setTeachers] = useState([]);
  const [departments, setDepartments] = useState([]);
  const [selectedDept, setSelectedDept] = useState('All Departments');
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
        setDeptItems([{ label: 'All Departments', value: 'All Departments' }, ...deptList]);
        setDepartments(['All Departments', ...deptsRes.data.departments.map(d => d.name)]);
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
    const matchesDept = selectedDept === 'All Departments' || t.department?.name === selectedDept;
    const matchesSearch = t.name.toLowerCase().includes(search.toLowerCase());
    return matchesDept && matchesSearch;
  });

  // Render teacher card
  const renderTeacher = ({ item }) => (
    <View style={styles.teacherCard}>
      <Image
        source={item.profile_pic ? { uri: item.profile_pic } : require('../../../assets/default_user.png')}
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
     {/* Custom Header */}
     
      <View style={styles.header}>
        <TouchableOpacity onPress={() => navigation.goBack()} style={{ marginRight: 12 }}>
          <Ionicons name="arrow-back" size={24} color="#fff" />
        </TouchableOpacity>
        <Text style={styles.userName}>Teachers</Text>
      </View>
    

      <View style={styles.searchBarContainer}>
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
        <View style={{ zIndex: 1000, marginHorizontal: 50, marginBottom: 12 }}>
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
            borderRadius: 3,
            elevation: 2,
            maxHeight: 500, // <-- makes dropdown scrollable
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
    </View>

      );
    };



export default TeachersListPage;
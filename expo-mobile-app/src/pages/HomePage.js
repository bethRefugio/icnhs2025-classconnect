import React, { useEffect, useState } from 'react';
import { View, Text, StyleSheet, Image, TouchableOpacity, TextInput, ScrollView, Alert } from 'react-native';
import AsyncStorage from '@react-native-async-storage/async-storage';
import axios from 'axios';
import { Ionicons, MaterialCommunityIcons, FontAwesome5, Feather } from '@expo/vector-icons';
import TeachersListPage from './TeachersListPage';

const HomePage = ({ navigation }) => {
  const [user, setUser] = useState(null);
  const [search, setSearch] = useState('');

  useEffect(() => {
    const fetchUser = async () => {
      try {
        const userId = await AsyncStorage.getItem('userId');
        if (userId) {
          // Fetch user data from your API
          const res = await axios.get(`http://192.168.73.232:8000/api/user/${userId}`);
          setUser(res.data.user);
        }
      } catch (err) {
        Alert.alert('Error', 'Failed to fetch user info');
      }
    };
    fetchUser();
  }, []);

  return (
    <ScrollView style={styles.container}>
      {/* Header */}
      <View style={styles.header}>
        <Image
          source={user?.profile_photo_url ? { uri: user.profile_photo_url } : require('../../assets/default_user.png')}
          style={styles.avatar}
        />
        <View style={{ flex: 1 }}>
          <Text style={styles.userName}>{user ? user.name : 'Loading...'}</Text>
        </View>
        <TouchableOpacity style={styles.bellBtn}>
          <Ionicons name="notifications-outline" size={28} color="#fff" />
        </TouchableOpacity>
      </View>

      {/* Search */}
      <View style={styles.searchContainer}>
        <Ionicons name="search" size={20} color="#888" style={{ marginLeft: 8 }} />
        <TextInput
          style={styles.searchInput}
          placeholder="Search a Teacher"
          placeholderTextColor="#888"
          value={search}
          onChangeText={setSearch}
        />
      </View>

      {/* Announcements */}
      <View style={styles.announcementsContainer}>
        <Text style={styles.announcementsTitle}>Announcements</Text>
        <View style={styles.announcementBox} />
        <View style={styles.announcementBox} />
      </View>

      {/* Menu Buttons */}
      <View style={styles.menuGrid}>
        <MenuButton
          icon={<MaterialCommunityIcons name="account-group" size={36} color="#295393" />}
          label="Teachers"
          color="#C6E6FB"
          onPress={() => navigation.navigate('TeachersListPage')}
        />
        <MenuButton
          icon={<FontAwesome5 name="calendar-alt" size={32} color="#295393" />}
          label="Appointments"
          color="#FFE6A7"
          onPress={() => navigation.navigate('Appointments')}
        />
        <MenuButton
          icon={<MaterialCommunityIcons name="message-text" size={32} color="#295393" />}
          label="Messages"
          color="#E6C6FB"
          badge={1}
          onPress={() => navigation.navigate('Messages')}
        />
        <MenuButton
          icon={<Feather name="map-pin" size={32} color="#295393" />}
          label="Campus Map"
          color="#F6C6FB"
          onPress={() => navigation.navigate('CampusMap')}
        />
        <MenuButton
          icon={<Ionicons name="megaphone" size={32} color="#295393" />}
          label="Announcements"
          color="#C6F7FB"
          onPress={() => navigation.navigate('Announcements')}
        />
        <MenuButton
          icon={<Ionicons name="person-circle-outline" size={36} color="#295393" />}
          label="Account"
          color="#FFE6A7"
          onPress={() => navigation.navigate('Settings')}
        />
      </View>
    </ScrollView>
  );
};

const MenuButton = ({ icon, label, color, onPress, badge }) => (
  <TouchableOpacity style={[styles.menuBtn, { backgroundColor: color }]} onPress={onPress}>
    <View style={{ position: 'relative', alignItems: 'center' }}>
      {icon}
      {badge ? (
        <View style={styles.badge}>
          <Text style={styles.badgeText}>{badge}</Text>
        </View>
      ) : null}
    </View>
    <Text style={styles.menuLabel}>{label}</Text>
  </TouchableOpacity>
);

const styles = StyleSheet.create({
  container: { flex: 1, backgroundColor: '#f5f8ff', paddingTop: 40 },
  header: {
    flexDirection: 'row',
    alignItems: 'center',
    backgroundColor: '#295393',
    padding: 16,
    borderTopLeftRadius: 10,
    borderTopRightRadius: 10,
  },
  avatar: { width: 50, height: 50, borderRadius: 25, marginRight: 12, borderWidth: 2, borderColor: '#fff' },
  userName: { color: '#fff', fontWeight: 'bold', fontSize: 20 },
  bellBtn: { marginLeft: 'auto', padding: 4 },
  searchContainer: {
    flexDirection: 'row',
    alignItems: 'center',
    backgroundColor: '#fff',
    marginHorizontal: 16,
    marginTop: 16,
    borderRadius: 10,
    paddingHorizontal: 8,
    paddingVertical: 4,
    elevation: 2,
    shadowColor: '#000',
    shadowOpacity: 0.05,
    shadowRadius: 4,
  },
  searchInput: { flex: 1, height: 40, marginLeft: 8, color: '#222'},
  announcementsContainer: {
    backgroundColor: '#F2F4F8',
    margin: 16,
    borderRadius: 12,
    padding: 12,
  },
  announcementsTitle: { fontWeight: 'bold', fontSize: 16, marginBottom: 8, color: '#222' },
  announcementBox: {
    backgroundColor: '#fff',
    borderRadius: 8,
    height: 50,
    marginBottom: 10,
    borderWidth: 1,
    borderColor: '#e0e0e0',
  },
  menuGrid: {
    flexDirection: 'row',
    flexWrap: 'wrap',
    justifyContent: 'space-between',
    margin: 16,
  },
  menuBtn: {
    width: '30%',
    aspectRatio: 1,
    borderRadius: 16,
    alignItems: 'center',
    justifyContent: 'center',
    marginBottom: 18,
    elevation: 2,
    shadowColor: '#000',
    shadowOpacity: 0.07,
    shadowRadius: 4,
  },
  menuLabel: { marginTop: 8, fontWeight: 'bold', color: '#295393', fontSize: 13, textAlign: 'center' },
  badge: {
    position: 'absolute',
    top: -6,
    right: -10,
    backgroundColor: '#E53935',
    borderRadius: 8,
    paddingHorizontal: 5,
    paddingVertical: 1,
    minWidth: 16,
    alignItems: 'center',
    justifyContent: 'center',
  },
  badgeText: { color: '#fff', fontSize: 10, fontWeight: 'bold' },
});

export default HomePage;
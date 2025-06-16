import React from 'react';
import { View, TouchableOpacity, Text, StyleSheet, Alert } from 'react-native';
import AsyncStorage from '@react-native-async-storage/async-storage';

const SettingsPage = ({ navigation, onLogout }) => {
  const handleLogout = async () => {
    await AsyncStorage.removeItem('userId');
    onLogout();
    navigation.navigate('Login');
  };

  return (
    <View style={styles.container}>
      <TouchableOpacity style={styles.button} onPress={handleLogout}>
        <Text style={styles.buttonText}>Log Out</Text>
      </TouchableOpacity>
    </View>
  );
};

const styles = StyleSheet.create({
  container: { flex: 1, justifyContent: 'center', alignItems: 'center', backgroundColor: '#121212' },
  button: { backgroundColor: '#6366F1', padding: 16, borderRadius: 8 },
  buttonText: { color: '#fff', fontWeight: 'bold', fontSize: 18 },
});

export default SettingsPage;
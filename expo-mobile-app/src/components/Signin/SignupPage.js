import React from 'react';
import { View, Text, TouchableOpacity, Image, StyleSheet } from 'react-native';

const roles = [
  { label: 'Student', icon: require('../../../assets/student.png'), accountId: 4 },
  { label: 'Teacher', icon: require('../../../assets/teacher.png'), accountId: 2 },
  { label: 'Parent', icon: require('../../../assets/parent.png'), accountId: 3 },
];

const SignupPage = ({ navigation }) => {
  const handleRoleSelect = (role) => {
    if (role.label === 'Teacher') {
      navigation.navigate('TeacherSignup', { account_id: role.accountId });
    }
    if (role.label === 'Student') {
      navigation.navigate('StudentSignup', { account_id: role.accountId });
    }
    // Add navigation for other roles as needed
  };

  return (
    <View style={styles.container}>
      <View style={styles.header}>
        <Text style={styles.headerText}>Select your role</Text>
      </View>
      <View style={styles.rolesContainer}>
        {roles.map((role) => (
          <TouchableOpacity
            key={role.label}
            style={styles.roleButton}
            onPress={() => handleRoleSelect(role)}
          >
            <Image source={role.icon} style={styles.roleIcon} />
            <Text style={styles.roleLabel}>{role.label}</Text>
          </TouchableOpacity>
        ))}
      </View>
    </View>
  );
};

const styles = StyleSheet.create({
  container: { flex: 1, backgroundColor: '#295393' },
  header: {
    paddingTop: 60,
    paddingBottom: 30,
    alignItems: 'center',
    backgroundColor: '#295393',
    borderBottomLeftRadius: 40,
    borderBottomRightRadius: 40,
  },
  headerText: { color: '#fff', fontSize: 26, fontWeight: 'bold' },
  rolesContainer: {
    flex: 1,
    backgroundColor: '#fff',
    borderTopLeftRadius: 40,
    borderTopRightRadius: 40,
    alignItems: 'center',
    paddingTop: 40,
  },
  roleButton: {
    alignItems: 'center',
    marginVertical: 18,
  },
  roleIcon: { width: 90, height: 90, marginBottom: 10 },
  roleLabel: { fontSize: 22, fontWeight: 'bold', color: '#295393' },
});

export default SignupPage;
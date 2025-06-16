import React, { useState } from 'react';
import { View, Text, TextInput, TouchableOpacity, StyleSheet, Alert, KeyboardAvoidingView, Platform, Image } from 'react-native';
import axios from 'axios';
import AsyncStorage from '@react-native-async-storage/async-storage';
import { Mail, Lock, Eye, EyeOff } from 'lucide-react-native';

const LoginPage = ({ navigation, onLogin }) => {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [error, setError] = useState('');
  const [showPassword, setShowPassword] = useState(false);

  const handleLogin = async () => {
    setError('');
    try {
      const response = await axios.post('http://192.168.73.232:8000/api/apiLogin', { email, password });
      if (response.status === 200) {
        const { user_id } = response.data;
        await AsyncStorage.setItem('userId', String(user_id));
        onLogin();
      }
    } catch (error) {
      const msg = error.response?.data?.message || 'Invalid email or password';
      setError(msg);
      Alert.alert('Login Failed', msg);
    }
  };

  return (
    <KeyboardAvoidingView style={{flex: 1, backgroundColor: '#295393'}} behavior={Platform.OS === 'ios' ? 'padding' : undefined}>
      <View style={styles.logoContainer}>
        <Image source={require('../../assets/classconnect_no_bg.png')} style={styles.logo} resizeMode="contain" />
        <Text style={styles.logoText}>CLASSCONNECT</Text>
      </View>
      <View style={styles.card}>
        <Text style={styles.loginTitle}>Log in</Text>
        {error ? (
          <Text style={styles.errorText}>{error}</Text>
        ) : null}
        <Text style={styles.label}>Email</Text>
        <View style={styles.inputWrapper}>
          <Mail color="#295393" size={22} style={styles.inputIcon} />
          <TextInput
            placeholder="Email"
            placeholderTextColor="#888"
            style={styles.input}
            value={email}
            onChangeText={setEmail}
            keyboardType="email-address"
            autoCapitalize="none"
          />
        </View>
        <Text style={styles.label}>Password</Text>
        <View style={styles.inputWrapper}>
          <Lock color="#295393" size={22} style={styles.inputIcon} />
          <TextInput
            placeholder="Password"
            placeholderTextColor="#888"
            style={styles.input}
            value={password}
            onChangeText={setPassword}
            secureTextEntry={!showPassword}
          />
          <TouchableOpacity onPress={() => setShowPassword(!showPassword)}>
            {showPassword ? (
              <EyeOff color="#888" size={22} style={styles.eyeIcon} />
            ) : (
              <Eye color="#888" size={22} style={styles.eyeIcon} />
            )}
          </TouchableOpacity>
        </View>
        <TouchableOpacity
          style={[styles.button, (!email || !password) && { backgroundColor: '#888' }]}
          onPress={handleLogin}
          disabled={!email || !password}
        >
          <Text style={styles.buttonText}>Log in</Text>
        </TouchableOpacity>
        <TouchableOpacity onPress={() => navigation.navigate('SignupPage')}>
          <Text style={styles.link}>Don't have an account? Sign in</Text>
        </TouchableOpacity>
      </View>
    </KeyboardAvoidingView>
  );
};

const styles = StyleSheet.create({
  logoContainer: {
    alignItems: 'center',
    marginTop: 60,
    marginBottom: 10,
  },
  logo: {
    width: 90,
    height: 90,
    marginBottom: 5,
  },
  logoText: {
    color: '#222',
    fontWeight: 'bold',
    fontSize: 20,
    letterSpacing: 1,
    marginBottom: 10,
  },
  card: {
    flex: 1,
    backgroundColor: '#fff',
    borderTopLeftRadius: 40,
    borderTopRightRadius: 40,
    padding: 30,
    paddingTop: 40,
    alignItems: 'stretch',
    shadowColor: '#000',
    shadowOpacity: 0.1,
    shadowRadius: 10,
    elevation: 10,
  },
  loginTitle: {
    fontSize: 28,
    fontWeight: 'bold',
    color: '#223263',
    marginBottom: 25,
    marginTop: 10,
  },
  label: {
    color: '#223263',
    fontWeight: 'bold',
    marginBottom: 5,
    marginTop: 10,
    fontSize: 16,
  },
  inputWrapper: {
    flexDirection: 'row',
    alignItems: 'center',
    backgroundColor: '#F4F4F4',
    borderRadius: 12,
    borderWidth: 1,
    borderColor: '#D1D5DB',
    marginBottom: 10,
    paddingHorizontal: 10,
  },
  inputIcon: {
    marginRight: 8,
  },
  input: {
    flex: 1,
    height: 48,
    color: '#223263',
    fontSize: 16,
  },
  eyeIcon: {
    marginLeft: 8,
  },
  button: {
    backgroundColor: '#295393',
    paddingVertical: 15,
    borderRadius: 12,
    alignItems: 'center',
    marginTop: 20,
  },
  buttonText: {
    color: '#fff',
    fontWeight: 'bold',
    fontSize: 18,
  },
  link: {
    color: '#223263',
    marginTop: 18,
    textAlign: 'center',
    fontSize: 15,
    textDecorationLine: 'underline',
  },
  errorText: {
    color: '#f5365c',
    marginBottom: 10,
    textAlign: 'center',
  },
});

export default LoginPage;
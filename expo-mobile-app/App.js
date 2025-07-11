import React, { useState, useEffect } from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';
import { Ionicons } from '@expo/vector-icons';
import { View, ActivityIndicator, Image, Text, StyleSheet } from 'react-native';
import AsyncStorage from '@react-native-async-storage/async-storage';

import LoginPage from './src/components/LoginPage';
import SignupPage from './src/components/Signin/SignupPage';
import HomePage from './src/components/HomePage';
import TeachersListPage from './src/components/Teachers/TeachersListPage';
import ProjectsPage from './src/components/ProjectsPage';
import RequestPage from './src/components/RequestPage';
import AnnouncementsPage from './src/components/AnnouncementsPage';
import SettingsPage from './src/components/SettingsPage';
import TeacherSignup from './src/components/Signin/TeacherSignup';
import StudentSignup from './src/components/Signin/StudentForm';
import MessagesPage from './src/components/Messages/MessagesPage';
import Conversation from './src/components/Messages/Conversation';

const Stack = createNativeStackNavigator();
const Tab = createBottomTabNavigator();



function ResidentTabs({ onLogout }) {
  return (
    <Tab.Navigator
      screenOptions={({ route }) => ({
        tabBarIcon: ({ color, size }) => {
          let iconName;
          if (route.name === 'Home') iconName = 'home';
          else if (route.name === 'Menu') iconName = 'menu';
          return <Ionicons name={iconName} size={size} color={color} />;
        },
        tabBarActiveTintColor: '#6366F1',
        tabBarInactiveTintColor: 'gray',
      })}
    >
      <Tab.Screen
        name="Home"
        component={HomePage}
        options={{ headerShown: false }} // <-- Hide the default header for Home
      />
      <Tab.Screen name="Menu">
        {(props) => <SettingsPage {...props} onLogout={onLogout} />}
      </Tab.Screen>
    </Tab.Navigator>
  );
}

export default function App() {
  const [isLoggedIn, setIsLoggedIn] = useState(false);
  const [loading, setLoading] = useState(true); // Add a loading state to prevent rendering before checking login status

  const handleLogout = async () => {
    await AsyncStorage.removeItem('userId');
    setIsLoggedIn(false);
  };

  useEffect(() => {
    const checkLoginStatus = async () => {
      try {
        // Retrieve the userId from AsyncStorage
        const userId = await AsyncStorage.getItem('userId');
        if (userId) {
          setIsLoggedIn(true); // User is logged in
        } else {
          setIsLoggedIn(false); // User is not logged in
        }
      } catch (error) {
        console.error('Error checking login status:', error);
      } finally {
        setLoading(false); // Set loading to false after checking
      }
    };

    checkLoginStatus();
  }, []);

  if (loading) {
    // Show a loading screen while checking login status
    return (
      <View style={{ flex: 1, justifyContent: 'center', alignItems: 'center' }}>
        <ActivityIndicator size="large" color="#6366F1" />
      </View>
    );
  }

  return (
    <NavigationContainer>
      <Stack.Navigator>
        {!isLoggedIn ? (
          <>
            <Stack.Screen name="Login" options={{ headerShown: false }}>
              {(props) => <LoginPage {...props} onLogin={() => setIsLoggedIn(true)} />}
            </Stack.Screen>
            <Stack.Screen name="SignupPage" component={SignupPage} options={{ headerShown: true }} />
             <Stack.Screen name="TeacherSignup" component={TeacherSignup} options={{ headerShown: false }} />
             <Stack.Screen name="StudentSignup" component={StudentSignup} options={{ headerShown: false }} />
             <Stack.Screen name="MessagesPage" component={MessagesPage} options={{ headerShown: false }} />
             <Stack.Screen name="Conversation" component={Conversation} options={{ headerShown: false }} />
             <Stack.Screen name="SettingsPage" component={SettingsPage} options={{ headerShown: false }} />
          </>
        ) : (
          <>
            <Stack.Screen
              name="ResidentTabs"
              options={{ headerShown: false }}
            >
              {(props) => <ResidentTabs {...props} onLogout={handleLogout} />}
            </Stack.Screen>

            <Stack.Screen
              name="TeachersListPage"
              component={TeachersListPage}
              options={{ headerShown: false, title: 'Teachers' }}
            />
            <Stack.Screen name="SignupPage" component={SignupPage} options={{ headerShown: false }} />
            <Stack.Screen name="TeacherSignup" component={TeacherSignup} options={{ headerShown: false }} />
            <Stack.Screen name="StudentSignup" component={StudentSignup} options={{ headerShown: false }} />
            <Stack.Screen name="MessagesPage" component={MessagesPage} options={{ headerShown: false }} />
            <Stack.Screen name="Conversation" component={Conversation} options={{ headerShown: false }} />
    
          </>
        )}
      </Stack.Navigator>
    </NavigationContainer>
  );
}

const styles = StyleSheet.create({
  headerContainer: {
    flexDirection: 'row',
    alignItems: 'center',
    backgroundColor: '#f5f8ff',
    paddingHorizontal: 20,
    paddingTop: 20,
    paddingBottom: 10,
    justifyContent: 'center',
  },
  logo: {
    width: 40,
    height: 40,
    marginRight: 12,
  },
  headerText: {
    color: '#fff',
    fontSize: 20,
    fontWeight: 'bold',
    paddingTop: 5,
    paddingBottom: 5,
  },
});

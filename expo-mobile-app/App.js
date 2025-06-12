import React, { useState, useEffect } from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';
import { Ionicons } from '@expo/vector-icons';
import { View, ActivityIndicator, Image, Text, StyleSheet } from 'react-native';
import AsyncStorage from '@react-native-async-storage/async-storage';

import LoginPage from './src/pages/LoginPage';
import SignupPage from './src/pages/SignupPage';
import HomePage from './src/pages/HomePage';
import TeachersListPage from './src/pages/TeachersListPage';
import ProjectsPage from './src/pages/ProjectsPage';
import RequestPage from './src/pages/RequestPage';
import AnnouncementsPage from './src/pages/AnnouncementsPage';
import SettingsPage from './src/pages/SettingsPage';

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
      {/*<Tab.Screen name="Request" component={RequestPage} />
      <Tab.Screen
        name="TeachersListPage"
        component={TeachersListPage}
        options={{ headerShown: true, title: 'Teachers' }}
      />
      <Tab.Screen name="Announcements" component={AnnouncementsPage} />
      <Tab.Screen name="Projects" component={ProjectsPage} />*/}
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
            <Stack.Screen name="Signup" component={SignupPage} options={{ headerShown: true }} />
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
              options={{ headerShown: true, title: 'Teachers' }}
            />
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
    backgroundColor: '#fff',
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
    color: 'gray',
    fontSize: 20,
    fontWeight: 'bold',
    paddingTop: 5,
    paddingBottom: 5,
  },
});

import React, { useState, useEffect } from 'react';
import { View, Text, FlatList, TextInput, TouchableOpacity, StyleSheet, Image, ActivityIndicator } from 'react-native';
import { Ionicons } from '@expo/vector-icons';
import axios from 'axios';
import { API_URL } from '../../../config';

export default function MessagesPage({ navigation }) {
  const [conversations, setConversations] = useState([]);
  const [allUsers, setAllUsers] = useState([]);
  const [search, setSearch] = useState('');
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    // Fetch conversations
    axios.get(`${API_URL}/conversations`)
      .then(res => {
        setConversations(res.data.conversations);
        setLoading(false);
      })
      .catch(() => setLoading(false));

    // Fetch all users for search
    axios.get(`${API_URL}/users`)
      .then(res => setAllUsers(res.data.users))
      .catch(() => {});
  }, []);

  // Show users matching search if searching, else show conversations
  const isSearching = search.trim().length > 0;
  const filteredUsers = allUsers.filter(u =>
    u.name.toLowerCase().includes(search.toLowerCase())
  );
  const filteredConversations = conversations.filter(c =>
    c.name.toLowerCase().includes(search.toLowerCase())
  );

  if (loading) {
    return <ActivityIndicator style={{ flex: 1 }} size="large" color="#23457b" />;
  }

  return (
    <View style={{ flex: 1, backgroundColor: '#f7f7f7' }}>
      {/* Header */}
      <View style={styles.header}>
        <TouchableOpacity onPress={() => navigation.goBack()}>
          <Ionicons name="arrow-back" size={24} color="#fff" />
        </TouchableOpacity>
        <TextInput
          style={styles.search}
          placeholder="Search"
          placeholderTextColor="#aaa"
          value={search}
          onChangeText={setSearch}
        />
      </View>
      <Text style={styles.title}>Messages</Text>
      {/* Actions */}
      <View style={styles.actions}>
        <Text style={styles.actionText}>Mark all read</Text>
        <TouchableOpacity>
          <Text style={styles.actionText}>Sort by unread messages <Ionicons name="chevron-down" size={14} /></Text>
        </TouchableOpacity>
      </View>
      {/* List */}
      <FlatList
        data={isSearching ? filteredUsers : filteredConversations}
        keyExtractor={item => item.id.toString()}
        renderItem={({ item }) => (
          <TouchableOpacity
            style={styles.convoItem}
            onPress={() => navigation.navigate('Conversation', { user: item })}
          >
            <Image source={item.avatar ? { uri: item.avatar } : require('../../../assets/default_user.png')} style={styles.avatar} />
            <View style={{ flex: 1 }}>
              <Text style={styles.name}>{item.name}</Text>
              {/* Show email if searching, last message if not */}
              <Text style={styles.lastMessage}>{isSearching ? item.email : item.lastMessage}</Text>
            </View>
            <View style={{ alignItems: 'flex-end' }}>
              {/* Show time and unread badge only for conversations */}
              <Text style={styles.time}>{isSearching ? '' : item.time}</Text>
              {!isSearching && item.unread > 0 && (
                <View style={styles.unreadBadge}>
                  <Text style={styles.unreadText}>{item.unread}</Text>
                </View>
              )}
            </View>
          </TouchableOpacity>
        )}
        contentContainerStyle={{ padding: 16 }}
        ListEmptyComponent={
          <Text style={{ textAlign: 'center', color: '#aaa', marginTop: 40 }}>
            {isSearching ? 'No users found.' : 'No conversations yet.'}
          </Text>
        }
      />
    </View>
  );
}

const styles = StyleSheet.create({
  header: {
    backgroundColor: '#23457b',
    flexDirection: 'row',
    alignItems: 'center',
    paddingHorizontal: 16,
    paddingTop: 48,
    paddingBottom: 12,
  },
  search: {
    backgroundColor: '#fff',
    borderRadius: 20,
    flex: 1,
    marginLeft: 12,
    paddingHorizontal: 16,
    height: 36,
    fontSize: 16,
  },
  title: {
    fontSize: 28,
    fontWeight: 'bold',
    marginLeft: 20,
    marginTop: 12,
    color: '#23457b',
  },
  actions: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    paddingHorizontal: 20,
    marginTop: 8,
    marginBottom: 8,
  },
  actionText: {
    color: '#23457b',
    fontWeight: '500',
    fontSize: 14,
  },
  convoItem: {
    backgroundColor: '#fff',
    borderRadius: 12,
    flexDirection: 'row',
    alignItems: 'center',
    padding: 14,
    marginBottom: 12,
    elevation: 1,
  },
  avatar: {
    width: 44,
    height: 44,
    borderRadius: 22,
    marginRight: 14,
  },
  name: {
    fontWeight: 'bold',
    fontSize: 16,
    color: '#23457b',
  },
  lastMessage: {
    color: '#555',
    fontSize: 14,
    marginTop: 2,
  },
  time: {
    color: '#aaa',
    fontSize: 12,
    marginBottom: 4,
  },
  unreadBadge: {
    backgroundColor: '#23457b',
    borderRadius: 10,
    minWidth: 20,
    paddingHorizontal: 6,
    alignItems: 'center',
    justifyContent: 'center',
    marginTop: 2,
  },
  unreadText: {
    color: '#fff',
    fontWeight: 'bold',
    fontSize: 12,
  },
});
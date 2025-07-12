import React, { useState, useEffect } from 'react';
import { View, Text, TextInput, TouchableOpacity, StyleSheet, Image, FlatList, ActivityIndicator } from 'react-native';
import { Ionicons, Feather } from '@expo/vector-icons';
import axios from 'axios';
import { API_URL } from '../../../config';

export default function Conversation({ route, navigation }) {
  const { user } = route.params;
  const [messages, setMessages] = useState([]);
  const [input, setInput] = useState('');
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    // Fetch messages between logged-in user and selected user
    axios.get(`${API_URL}/messages/${user.id}`) // Adjust endpoint as needed
      .then(res => {
        setMessages(res.data.messages); // Adjust according to your API response
        setLoading(false);
      })
      .catch(() => setLoading(false));
  }, [user.id]);

  const sendMessage = () => {
    if (!input.trim()) return;
    // Optionally POST to backend here
    setMessages([
      ...messages,
      {
        id: Date.now().toString(),
        text: input,
        time: new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }),
        fromMe: true,
      },
    ]);
    setInput('');
  };

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
        <Image source={user.avatar} style={styles.headerAvatar} />
        <Text style={styles.headerTitle}>{user.name}</Text>
      </View>
      {/* Messages */}
      <FlatList
        data={messages}
        keyExtractor={item => item.id.toString()}
        renderItem={({ item }) => (
          <View style={[
            styles.messageRow,
            item.fromMe ? styles.messageRowMe : styles.messageRowOther
          ]}>
            {!item.fromMe && <Image source={user.avatar ? { uri: user.avatar } : require('../../../assets/default_user.png')} style={styles.msgAvatar} />}
            <View style={[
              styles.messageBubble,
              item.fromMe ? styles.bubbleMe : styles.bubbleOther
            ]}>
              <Text style={[
                styles.messageText,
                item.fromMe ? styles.textMe : styles.textOther
              ]}>{item.text}</Text>
              <Text style={styles.messageTime}>{item.time}</Text>
            </View>
            {item.fromMe && (
              <Image
                source={require('../../../assets/default_user.png')}
                style={styles.msgAvatar}
              />
            )}
          </View>
        )}
        contentContainerStyle={{ padding: 16, paddingBottom: 80 }}
        inverted
      />
      {/* Input */}
      <View style={styles.inputBar}>
        <TouchableOpacity>
          <Feather name="plus" size={24} color="#23457b" />
        </TouchableOpacity>
        <TextInput
          style={styles.input}
          placeholder="Type a message..."
          value={input}
          onChangeText={setInput}
        />
        <TouchableOpacity onPress={sendMessage}>
          <Feather name="send" size={24} color="#23457b" />
        </TouchableOpacity>
      </View>
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
    paddingBottom: 16,
  },
  headerAvatar: {
    width: 36,
    height: 36,
    borderRadius: 18,
    marginLeft: 12,
    marginRight: 8,
    backgroundColor: '#fff',
  },
  headerTitle: {
    color: '#fff',
    fontWeight: 'bold',
    fontSize: 20,
  },
  messageRow: {
    flexDirection: 'row',
    alignItems: 'flex-end',
    marginBottom: 12,
  },
  messageRowMe: {
    justifyContent: 'flex-end',
  },
  messageRowOther: {
    justifyContent: 'flex-start',
  },
  msgAvatar: {
    width: 32,
    height: 32,
    borderRadius: 16,
    marginRight: 8,
    marginLeft: 8,
    backgroundColor: '#eee',
  },
  messageBubble: {
    maxWidth: '70%',
    borderRadius: 12,
    padding: 12,
    marginBottom: 2,
  },
  bubbleMe: {
    backgroundColor: '#e7ecf7',
    marginLeft: 40,
  },
  bubbleOther: {
    backgroundColor: '#fff',
    marginRight: 40,
  },
  messageText: {
    fontSize: 16,
  },
  textMe: {
    color: '#23457b',
  },
  textOther: {
    color: '#222',
  },
  messageTime: {
    fontSize: 12,
    color: '#aaa',
    marginTop: 4,
    alignSelf: 'flex-end',
  },
  inputBar: {
    flexDirection: 'row',
    alignItems: 'center',
    backgroundColor: '#fff',
    padding: 12,
    borderTopLeftRadius: 16,
    borderTopRightRadius: 16,
    position: 'absolute',
    bottom: 0,
    left: 0,
    right: 0,
  },
  input: {
    flex: 1,
    backgroundColor: '#f7f7f7',
    borderRadius: 20,
    paddingHorizontal: 16,
    marginHorizontal: 12,
    fontSize: 16,
    height: 40,
  },
});
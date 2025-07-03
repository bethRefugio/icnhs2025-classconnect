import React, { useEffect, useState } from "react";
import { useCreateChatClient, OverlayProvider, Chat } from "stream-chat-expo";
import AsyncStorage from "@react-native-async-storage/async-storage";
import axios from "axios";
import { Alert } from "react-native";
import { chatApiKey, chatUserToken } from "./chatConfig";
import { API_URL } from "../../../config";

export const ChatProvider = ({ children }) => {
  const [chatUserId, setChatUserId] = useState(null);
  const [chatUserName, setChatUserName] = useState(null);
  
  useEffect(() => {
    const fetchUser = async () => {
      try {
        const userId = await AsyncStorage.getItem('userId');
        if (userId) {
          // Fetch user data from your API
          const res = await axios.get(`${API_URL}/user/${userId}`);
          const user = res.data.user;
          setChatUserId(user.id?.toString());
          setChatUserName(user.name);
        }
      } catch (err) {
        Alert.alert('Error', 'Failed to fetch user info');
      }
    };
    fetchUser();
  }, []);

  const user = chatUserId && chatUserName ? { id: chatUserId, name: chatUserName } : null;

  const chatClient = useCreateChatClient({
    apiKey: chatApiKey,
    userData: user,
    tokenOrProvider: chatUserToken,
  });

  if (!user || !chatClient) {
    return null;
  }

  // Custom theme for ChannelPreviewMessenger background
  const chatTheme = {
    channelPreview: {
      container: {
        backgroundColor: 'transparent',
      }
    }
  };

  return (
    <OverlayProvider value={{ style: chatTheme }}>
      <Chat client={chatClient} enableOfflineSupport>
        {children}
      </Chat>
    </OverlayProvider>
  );
};
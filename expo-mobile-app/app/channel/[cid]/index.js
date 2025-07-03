import React, { useContext } from "react";
import { SafeAreaView, Text } from "react-native";
import { Channel, MessageInput, MessageList } from "stream-chat-expo";
import { Stack, useRouter } from "expo-router";
import { AppContext } from "../../../src/contexts/AppContext";
import { useHeaderHeight } from "@react-navigation/elements";

export default function ChannelScreen() {
  const { channel, setThread } = useContext(AppContext);
  const headerHeight = useHeaderHeight();
  const router = useRouter();

  if (!channel) {
    return (
      <SafeAreaView>
        <Text>Loading chat ...</Text>
      </SafeAreaView>
    );
  }

  return (
    <SafeAreaView style={{ flex: 1 }}>
      <Stack.Screen options={{ title: "Channel" }} />
      <Channel
        channel={channel}
        keyboardVerticalOffset={headerHeight}
        audioRecordingEnabled
      >
        <MessageList
          onThreadSelect={(thread) => {
            setThread(thread);
            router.push(`/channel/${channel.cid}/thread/${thread?.id}`);
          }}
        />
        <MessageInput />
      </Channel>
    </SafeAreaView>
  );
}
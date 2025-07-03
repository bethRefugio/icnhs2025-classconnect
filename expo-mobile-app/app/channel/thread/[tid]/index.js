import React, { useContext } from "react";
import { SafeAreaView, Text, View } from "react-native";
import { Channel, Thread } from "stream-chat-expo";
import { Stack } from "expo-router";
import { AppContext } from "../../../../src/contexts/AppContext";
import { useHeaderHeight } from "@react-navigation/elements";

export default function ThreadScreen() {
  const { channel, thread, setThread } = useContext(AppContext);
  const headerHeight = useHeaderHeight();

  if (!channel) {
    return (
      <SafeAreaView>
        <Text>Loading chat ...</Text>
      </SafeAreaView>
    );
  }

  return (
    <SafeAreaView style={{ flex: 1 }}>
      <Stack.Screen options={{ title: "Thread" }} />
      <Channel
        channel={channel}
        keyboardVerticalOffset={headerHeight}
        thread={thread}
        threadList
      >
        <View style={{ flex: 1, justifyContent: "flex-start" }}>
          <Thread
            onThreadDismount={() => {
              setThread(undefined);
            }}
          />
        </View>
      </Channel>
    </SafeAreaView>
  );
}
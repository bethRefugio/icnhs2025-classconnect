import React, { useContext } from "react";
import { SafeAreaView, Text } from "react-native";
import { ChannelList } from "stream-chat-expo";
import { useChatContext } from "stream-chat-expo";
import { useRouter } from "expo-router";
import { AppContext } from "./../contexts/AppContext";
import { CustomChannelPreview } from "./CustomChannelPreview";

export const ChatWrapper = () => {
  const { client } = useChatContext();
  const { setChannel } = useContext(AppContext);
  const router = useRouter();

  // Wait until client and client.user are available
  if (!client || !client.user) {
    return (
      <SafeAreaView>
        <Text>Loading chat ...</Text>
      </SafeAreaView>
    );
  }

  const filters = { members: { $in: [client.user.id] }, type: "messaging" };
  const sort = { last_updated: -1 };
  const options = { state: true, watch: true };

  return (
    <SafeAreaView style={{ flex: 1 }}>
      <ChannelList
        filters={filters}
        sort={sort}
        options={options}
        Preview={CustomChannelPreview}
        onSelect={(channel) => {
          setChannel(channel);
          router.push(`/channel/${channel.cid}`);
        }}
      />
    </SafeAreaView>
  );
};
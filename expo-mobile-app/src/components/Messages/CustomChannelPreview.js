import React from "react";
import { View } from "react-native";
import { ChannelPreviewMessenger } from "stream-chat-expo";

export const CustomChannelPreview = (props) => {
  const { unread } = props;
  const backgroundColor = unread ? "#e6f7ff" : "#fff";
  return (
    <View style={{ backgroundColor }}>
      <ChannelPreviewMessenger {...props} />
    </View>
  );
};
import { ChatProvider } from "./ChatProvider";
import { ChatWrapper } from "./ChatWrapper";
import { AppProvider } from "./../contexts/AppContext";

export default function MessagesPage() {
  return (
    <ChatProvider>
      <AppProvider>
        <ChatWrapper />
      </AppProvider>
    </ChatProvider>
  );
}
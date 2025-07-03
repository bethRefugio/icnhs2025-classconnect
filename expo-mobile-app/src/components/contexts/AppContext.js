import React, { useState } from "react";

export const AppContext = React.createContext({
  channel: null,
  setChannel: () => {},
  thread: null,
  setThread: () => {},
});

export const AppProvider = ({ children }) => {
  const [channel, setChannel] = useState();
  const [thread, setThread] = useState();

  return (
    <AppContext.Provider value={{ channel, setChannel, thread, setThread }}>
      {children}
    </AppContext.Provider>
  );
};

export const useAppContext = () => React.useContext(AppContext);
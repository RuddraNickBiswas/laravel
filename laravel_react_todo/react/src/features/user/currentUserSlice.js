import { createSlice } from "@reduxjs/toolkit";

const initialState = null;

const currentUserSlice = createSlice({
  name: "currentUser",
  initialState,
  reducers: {
    addCurrentUserToken: (state, action) => {
      localStorage.setItem("TOKEN", action.payload);
      return state;
    },
    addCurrentUser: (state, action) => {
      return action.payload;
    },
    removeCurrentUser: (state) => {
      localStorage.removeItem("TOKEN");
      return null;
    },
  },
});

export const { addCurrentUserToken, addCurrentUser, removeCurrentUser } =
  currentUserSlice.actions;

export const selectCurrentUser = (state) => state.currentUser;

export default currentUserSlice.reducer;

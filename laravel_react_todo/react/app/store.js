import { configureStore } from "@reduxjs/toolkit";
import { apiSlice } from "../src/features/api/apiSlice";
import currentUserRedurecr from '../src/features/user/currentUserSlice'
export const store = configureStore({
    reducer: {
        [apiSlice.reducerPath]: apiSlice.reducer,
        currentUser : currentUserRedurecr,
    
    },
    middleware: (getDefaultMiddleware) =>
        getDefaultMiddleware().concat(apiSlice.middleware),
    devTools: true,
});

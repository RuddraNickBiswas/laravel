import React from "react";
import ReactDOM from "react-dom/client";
import { RouterProvider } from "react-router-dom";
import App from "./App";
import { ContextProvider } from "./contexts/ContextProvider";
import { ApiProvider } from "@reduxjs/toolkit/query/react";
import "./index.css";
import router from "./router";
import { apiSlice } from "./features/api/apiSlice";
import { Provider } from "react-redux";

ReactDOM.createRoot(document.getElementById("root")).render(
    <React.StrictMode>
        <Provider store={store}>
            <RouterProvider router={router} />
        </Provider>
    </React.StrictMode>
);

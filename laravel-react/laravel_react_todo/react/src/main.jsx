import React from "react";
import ReactDOM from "react-dom/client";
import { RouterProvider } from "react-router-dom";
import App from "./App";
import { ContextProvider } from "./contexts/ContextProvider";
import { ApiProvider } from "@reduxjs/toolkit/query/react";
import "./index.css";
import router from "./router";
import { apiSlice } from "./features/api/apiSlice";

ReactDOM.createRoot(document.getElementById("root")).render(
    <React.StrictMode>
      <ApiProvider api={apiSlice}>

        <ContextProvider>
            <RouterProvider router={router} />
        </ContextProvider>
      </ApiProvider>
    </React.StrictMode>
);

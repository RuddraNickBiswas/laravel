import { createBrowserRouter, Navigate } from "react-router-dom";
import DefaultLayout from "./components/DefaultLayout";
import GuestLayout from "./components/GuestLayout";
import Dashboard from "./views/Dashboard";
import ER from "./views/ER";
import Login from "./views/Login";
import Signup from "./views/Signup";
import UserHome from "./views/UserHome";
const router = createBrowserRouter([
    {
        path: "/",
        element: <DefaultLayout />,
        children: [
            {
                path: "/dashboard",
                element: <Navigate to="/" />,
            },
            {
                path: "/",
                element: <Dashboard />,
            },
        ],
    },
    {
        path: "/",
        element: <GuestLayout />,
        children: [
            {
                path: "/login",
                element: <Login />,
            },

            {
                path: "/signup",
                element: <Signup />,
            },
            {
                path: "/extra",
                element: <UserHome/>,
            },
        ],
    },
]);

export default router;

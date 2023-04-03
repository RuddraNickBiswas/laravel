import { createBrowserRouter, Navigate } from "react-router-dom";
import DefaultLayout from "./components/DefaultLayout";
import GuestLayout from "./components/GuestLayout";
import Dashboard from "./views/Dashboard";
import Extra from "./views/Extra";
import Login from "./views/Login";
import Signup from "./views/Signup";

const router = createBrowserRouter([
    {
        path: '/',
        element: <DefaultLayout />,
        children:[
            {
                path :'/dashboard',
                element : <Navigate to='/'/>
            },
            {
                path : '/',
                element : <Dashboard />
            }
        ]
    },
    {
        path : '/',
        element: <GuestLayout />,
        children:[
            {
                path: '/login',
                element: <Login />,
            },

            {
                path : '/signup',
                element: <Signup/>
            },
            {
                path : '/extra',
                element: <Extra/>
            }
        ]
    }
]);


export default router;
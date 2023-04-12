import * as React from "react";
import { Box, createTheme, Paper, useTheme } from "@mui/material";
import AppBar from "@mui/material/AppBar";
import Toolbar from "@mui/material/Toolbar";
import Typography from "@mui/material/Typography";
import RightSideBar from "../components/RightSideBar";

import MyDrawer from "../components/MyDrawer";
import MyAppBar from "../components/MyAppBar";
import { useSelector } from "react-redux";
import { useGetUserQuery } from "../features/user/userSlice";
import { ThemeProvider } from "@emotion/react";

const drawerWidth = 340;

export default function UserHome() {
    const { data: user, isLoading } = useGetUserQuery();

    const theme = createTheme({
        palette: {
            mode:'light',
            primary: {
                main: '#009ae2',
            },
            secondary: {
                main: '#1d9696',
            },
        },
    });

    if (isLoading) {
        return <div>loading.....</div>;
    }
    const userId = user.user.id;
    return (
        <ThemeProvider theme={theme}>
            <Box sx={{ display: "flex" }}>
                {/* <MyAppBar drawerWidth={drawerWidth} /> */}
                <MyDrawer drawerWidth={drawerWidth}>
                    <RightSideBar userId={userId} />
                </MyDrawer>
                <Box
                    component="main"
                    sx={{ flexGrow: 1, bgcolor: "background.default", p: 3 }}
                >
                    <Box sx={{
                        width:'100%',
                        height:'100%'
                    }}> </Box>
                </Box>
            </Box>
        </ThemeProvider>
    );
}

import * as React from "react";
import { Box } from "@mui/material";
import AppBar from "@mui/material/AppBar";
import Toolbar from "@mui/material/Toolbar";
import Typography from "@mui/material/Typography";
import RightSideBar from "../components/RightSideBar";


import MyDrawer from "../components/MyDrawer";

const drawerWidth = 340;

export default function UserHome() {

    return (
        <Box sx={{ display: "flex" }}>
            <AppBar
                variant="outlined"
                color="transparent"
                position="fixed"
                sx={{
                    width: `calc(100% - ${drawerWidth}px)`,
                    ml: `${drawerWidth}px`,
                }}
            >
                <Toolbar>
                    <Typography variant="h6" noWrap component="div">
                        Permanent drawer
                    </Typography>
                </Toolbar>
            </AppBar>
            <MyDrawer drawerWidth={drawerWidth}>
                <RightSideBar />
            </MyDrawer>
            <Box
                component="main"
                sx={{ flexGrow: 1, bgcolor: "background.default", p: 3 }}
            >
                {/* <DummyC/> */}
            </Box>
        </Box>
    );
}

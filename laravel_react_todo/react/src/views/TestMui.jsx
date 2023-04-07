import * as React from "react";
import {Box} from "@mui/material";
import Drawer from "@mui/material/Drawer";
import AppBar from "@mui/material/AppBar";
import Toolbar from "@mui/material/Toolbar";
import List from "@mui/material/List";
import Typography from "@mui/material/Typography";
import DummyC from "../components/DummyC";
import RightSideBar from '../components/RightSideBar'

const drawerWidth = 340;

export default function DrawerMui() {
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
            <Drawer
            elevation={4}
                sx={{
                    width: drawerWidth,
                    flexShrink: 0,
                    "& .MuiDrawer-paper": {
                        width: drawerWidth,
                        boxSizing: "border-box",
                        borderRight:'none',
                        
                    },

                }}
                variant="permanent"
                anchor="left"
            >
                {/* <Toolbar /> */}
                {/* <Divider /> */}
                <RightSideBar/>
            </Drawer>
            <Box
                component="main"
                sx={{ flexGrow: 1, bgcolor: "background.default", p: 3 }}
            >
             {/* <DummyC/> */}
            </Box>
        </Box>
    );
}

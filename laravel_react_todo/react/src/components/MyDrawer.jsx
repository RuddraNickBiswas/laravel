import { Drawer } from "@mui/material";
import React from "react";

export default function MyDrawer({ children, drawerWidth }) {
    return (
        <Drawer
            sx={{
                width: drawerWidth,
                flexShrink: 0,
                "& .MuiDrawer-paper": {
                    width: drawerWidth,
                    boxSizing: "border-box",
                    borderRight: "none",
                },
            }}
            variant="permanent"
            anchor="left"
        >
            {/* <Toolbar /> */}
            {/* <Divider /> */}
            {children}
        </Drawer>
    );
}

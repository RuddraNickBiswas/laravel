import { AppBar, Toolbar, Typography } from "@mui/material";
import React from "react";

export default function MyAppBar({ drawerWidth }) {
    return (
        <AppBar
            variant="outlined"
            color="transparent"
            position="fixed"
            sx={{
                width: `calc(100% - ${drawerWidth}px)`,
                ml: `${drawerWidth}px`,
                mt:1,
                border:1,
                borderRadius:1,
                borderColor: (theme) => theme.palette.primary.main,
                
            }}
        >
            <Toolbar>
                <Typography variant="" noWrap component="div">
                   
                </Typography>
            </Toolbar>
        </AppBar>
    );
}

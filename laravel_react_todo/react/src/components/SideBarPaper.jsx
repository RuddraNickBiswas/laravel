import { Paper } from "@mui/material";
import React from "react";

export default function SideBarPaper({ children, mt = 0, flex = "row" }) {
    return (
        <Paper
            elevation={1}
            sx={{
                display: "flex",
                p: 1,
                mt,
                width: "100%",
                bgcolor: "transparent",
                flexDirection: flex,
                justifyContent: "center",
                alignItems: "center",
                alignContent: "centerl",
                justifyItems: "center",
                border: 1,
                borderColor: (theme) => theme.palette.primary.main,
            }}
        >
            {children}
        </Paper>
    );
}

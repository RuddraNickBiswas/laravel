import * as React from "react";
import { styled } from "@mui/material/styles";
import Box from "@mui/material/Box";
import LinearProgress, {
    linearProgressClasses,
} from "@mui/material/LinearProgress";
import { Typography } from "@mui/material";

const BorderLinearProgress = styled(LinearProgress)(({ theme }) => ({
    height: 10,
    borderRadius: 5,
    [`&.${linearProgressClasses.colorPrimary}`]: {
        backgroundColor:
            theme.palette.grey[theme.palette.mode === "light" ? 300 : 800],
    },
    [`& .${linearProgressClasses.bar}`]: {
        borderRadius: 5,
        backgroundColor:
            theme.palette.mode === "light"
                ? theme.palette.secondary.light
                : theme.palette.secondary.dark,
    },
}));

export default function SkillProgress({ name, value }) {
    return (
        <Box
            sx={{
                width: "100%",
            }}
        >
            <Typography variant="caption">{name} :</Typography>
            <BorderLinearProgress variant="determinate" value={value} />
        </Box>
    );
}

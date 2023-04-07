import {
    Avatar,
    Box,
    Typography,
    Chip,
} from "@mui/material";
import React from "react";

import FaceIcon from "@mui/icons-material/Face";
import { red } from "@mui/material/colors";
import SideBarPaper from "./SideBarPaper";
import CustomizedProgressBars from "./SkillProgress";
import SkillProgress from "./SkillProgress";
import SideBarLinks from "./SideBarLinks";

export default function RightSideBar({ rwidth }) {
    return (
        <Box
            sx={{
                p: 1,
                // bgcolor:(theme) => theme.palette.grey[700]
            }}
        >
            <Box
                sx={{
                    display: "flex",
                    flexDirection: "column",
                    justifyContent: "center",
                    alignItems: "center",
                    alignContent: "centerl",
                    justifyItems: "center",
                }}
            >
                <SideBarPaper flex="column">
                    <Box>
                        <Avatar
                            sx={{
                                width: "80px",
                                height: "80px",
                                mr: 2,
                            }}
                            alt="Remy Sharp"
                            src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                        />
                    </Box>
                    <Box
                        sx={{
                            display: "flex",
                            flexDirection: "column",
                            justifyItems: "center",
                            alignItems: "center",
                            justifyContent: "center",
                            alignContent: "center",
                        }}
                    >
                        <Typography component="h2" variant="subtitle1">
                            Ruddra Biswas
                        </Typography>
                        <Typography
                            component="p"
                            variant="subtitle2"
                            color="gray"
                            mb={1}
                        >
                            biswasruddra100@gmail.com
                        </Typography>
                        <Box display="flex">
                            <Chip
                                size="small"
                                icon={<FaceIcon />}
                                label="With Icon"
                            />
                            <Chip
                                size="small"
                                icon={<FaceIcon />}
                                label="With Icon"
                                variant="outlined"
                            />
                        </Box>
                    </Box>
                </SideBarPaper>

                <Box mt={2} width="100%">
                    <SideBarPaper mt={1} flex="column">
                        <SkillProgress name="React" value="65" />
                    </SideBarPaper>
                    <SideBarPaper mt={1} flex="column">
                        <SkillProgress name="React" value="65" />
                    </SideBarPaper>
                    <SideBarPaper mt={1} flex="column">
                        <SkillProgress name="React" value="65" />
                    </SideBarPaper>
                </Box>
                <Box mt={2} width="100%">
                    <SideBarPaper mt={1} flex="column">
                        <SideBarLinks link={'https://github.com/recharts/recharts'}/>
                    </SideBarPaper>
                    <SideBarPaper mt={1} flex="column">
                        <SideBarLinks link={'https://github.com/recharts/recharts'}/>
                    </SideBarPaper>
                    <SideBarPaper mt={1} flex="column">
                        <SideBarLinks link={'https://github.com/recharts/recharts'}/>
                    </SideBarPaper>
                </Box>
            </Box>
        </Box>
    );
}

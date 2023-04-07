import { Avatar, Box, Typography, Chip } from "@mui/material";
import React from "react";

import FaceIcon from "@mui/icons-material/Face";
import SideBarPaper from "./SideBarPaper";
import SkillProgress from "./SkillProgress";
import SideBarLinks from "./SideBarLinks";

import {
    useGetSocialMediaLinkByUserIdQuery,
    useGetSocialMediaLinkQuery,
    useGetUserAddressByUserIdQuery,
    useGetUserByUserIdQuery,
    useGetUserQuery,
    useGetUserSkillByUserIdQuery,
    useGetUserSkillQuery,
} from "../features/user/userSlice";

export default function RightSideBar() {
    const { data: user, isLoading: userLoading } = useGetUserByUserIdQuery(2);
    const { data: skills, isLoading: skillsLoading } =
        useGetUserSkillByUserIdQuery(1);
    const { data: slink, isLoading: slinkLoading } =
        useGetSocialMediaLinkByUserIdQuery(4);

    const { data: userAddress, isLoading: userAddressLoading } =
        useGetUserAddressByUserIdQuery(4);

    {
        userLoading ? "l" : console.log(user.user.name);
    }
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
                            {userLoading ? "loading...." : user.user.name}
                        </Typography>
                        <Typography
                            component="p"
                            variant="subtitle2"
                            color="gray"
                            mb={1}
                        >
                            {userLoading ? "loading...." : user.user.email}
                        </Typography>
                        {userLoading ? (
                            "loadding....."
                        ) : (
                            <Box display="flex">
                                {user.user.type === "dev" ||
                                user.user.type === "both" ? (
                                    <Chip
                                        size="small"
                                        icon={<FaceIcon />}
                                        label="Dev"
                                    />
                                ) : null}

                                {user.user.type === "des" ||
                                user.user.type === "both" ? (
                                    <Chip
                                        size="small"
                                        icon={<FaceIcon />}
                                        label="Des"
                                    />
                                ) : null}
                            </Box>
                        )}
                    </Box>
                </SideBarPaper>

                <Box mt={2} width="100%">
                    {skillsLoading
                        ? "loading"
                        : skills.data.map((skill) => (
                              <SideBarPaper
                                  mt={1}
                                  key={`${skill.id} ${skill.skill_name}`}
                                  flex="column"
                              >
                                  <SkillProgress
                                      name={skill.skill_name}
                                      value={skill.progress}
                                  />
                              </SideBarPaper>
                          ))}
                </Box>
                <Box mt={2} width="100%">
                    {slinkLoading
                        ? "loading"
                        : slink.data.map((slink) => (
                              <SideBarPaper
                                  mt={1}
                                  key={`${slink.id} ${slink.social_media_link}`}
                                  flex="row"
                              >
                                  <SideBarLinks
                                      link={slink.social_media_link}
                                      name={slink.social_media_name}
                                  />
                              </SideBarPaper>
                          ))}
                </Box>
            </Box>
        </Box>
    );
}

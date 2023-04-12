import {
    Avatar,
    Box,
    Typography,
    Chip,
    Modal,
    TextField,
    Button,
} from "@mui/material";
import React, { useState } from "react";

import FaceIcon from "@mui/icons-material/Face";
import SideBarPaper from "./SideBarPaper";
import SkillProgress from "./SkillProgress";
import SideBarLinks from "./SideBarLinks";

import {
    useGetSocialMediaLinkByUserIdQuery,
    useGetUserAddressByUserIdQuery,
    useGetUserByUserIdQuery,
    useGetUserSkillByUserIdQuery,
    useUpdateUserMutation,
} from "../features/user/userSlice";

export default function RightSideBar({ userId }) {
    const [modelOpen, setModelOpen] = useState(false);
    const handleModelOpen = () => setModelOpen(true);
    const handleModelClose = () => setModelOpen(false);

    
    const style = {
        position: "absolute",
        top: "50%",
        left: "50%",
        transform: "translate(-50%, -50%)",
        width: 400,
        bgcolor: "background.paper",
        border: 2,
        boxShadow: 24,
        p: 4,
        borderRadius: 1,
        borderColor: (theme) => theme.palette.primary.main,
    };
    const [updateUser, { isLoading }] = useUpdateUserMutation();
    
    const handleSubmit = async (event) => {
        event.preventDefault();
        const data = new FormData(event.currentTarget);
        const name = data.get("name");
        const email = data.get("email");

        try {
            await updateUser({ name: name, email:email });
        } catch (err) {
            console.error("Failed to save the post", err);
        }
        handleModelClose()
    };

    const { data: user, isLoading: userLoading } =
        useGetUserByUserIdQuery(userId);
    const { data: skills, isLoading: skillsLoading } =
        useGetUserSkillByUserIdQuery(userId);
    const { data: slink, isLoading: slinkLoading } =
        useGetSocialMediaLinkByUserIdQuery(userId);

    const { data: userAddress, isLoading: userAddressLoading } =
        useGetUserAddressByUserIdQuery(userId);

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
                    <Box onClick={handleModelOpen}>
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
            <Modal
                open={modelOpen}
                onClose={handleModelClose}
                aria-labelledby="modal-modal-title"
                aria-describedby="modal-modal-description"
            >
                <Box sx={style}>
                    <Box
                        component="form"
                        onSubmit={handleSubmit}
                        noValidate
                        sx={{ mt: 1 }}
                    >
                        <TextField
                            margin="normal"
                            required
                            fullWidth
                            name="name"
                            label="Name"
                            type="text"
                            id="name"
                            autoComplete="name"
                        />
                        <TextField
                            margin="normal"
                            required
                            fullWidth
                            id="email"
                            label="Email Address"
                            name="email"
                            autoComplete="email"
                            autoFocus
                        />

                        <Button
                            type="submit"
                            fullWidth
                            variant="contained"
                            sx={{ mt: 3, mb: 2 }}
                        >
                           Update
                        </Button>
                    </Box>
                </Box>
            </Modal>
        </Box>
    );
}

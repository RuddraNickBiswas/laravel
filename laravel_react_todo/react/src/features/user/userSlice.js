import { createEntityAdapter } from "@reduxjs/toolkit";
import { apiSlice } from "../api/apiSlice";

const userAdapter = createEntityAdapter();

const initialState = userAdapter.getInitialState();

export const userApiSlice = apiSlice.injectEndpoints({
    endpoints: (builder) => ({
        userSignUp: builder.mutation({
            query: (userData) => ({
                url: "/signup",
                method: "POST",
                body: userData,
            }),
            invalidatesTags: ["User"],
        }),
        userLogin: builder.mutation({
            query: (userData) => ({
                url: "/login",
                method: "POST",
                body: userData,
            }),
            invalidatesTags: ["User"],
        }),
        getUser: builder.query({
            query: () => "/user/information",
            providesTags: ["User"],
        }),
        updateUser: builder.mutation({
            query: (userData) => ({
                url: `/user/update/${userData.id}`,
                method: "POST",
                body: userData,
            }),
            invalidatesTags: ["User"],
        }),
        addUserAddress: builder.mutation({
            query: (addressData) => ({
                url: "/user/address",
                method: "POST",
                body: addressData,
            }),
            invalidatesTags: ["Address"],
        }),
        getUserAddress: builder.query({
            query: () => "/user/address",
            providesTags: ["Address"],
        }),
        updateUserAddress: builder.mutation({
            query: (addressData) => ({
                url: `/user/address/${addressData.id}`,
                method: "PATCH",
                body: addressData,
            }),
            invalidatesTags: ["Address"],
        }),
        deleteUserAddress: builder.mutation({
            query: (addressData) => ({
                url: `/user/address/${addressData.id}`,
                method: "DELETE",
            }),
            invalidatesTags: ["Address"],
        }),
        addSocialMediaLink: builder.mutation({
            query: (socialMediaData) => ({
                url: "/user/slink",
                method: "POST",
                body: socialMediaData,
            }),
            invalidatesTags: ["SocialMediaLink"],
        }),
        getSocialMediaLink: builder.query({
            query: () => "/user/slink",
            providesTags: ["SocialMediaLink"],
        }),
        updateSocialMediaLink: builder.mutation({
            query: (socialMediaData) => ({
                url: `/user/slink/${socialMediaData.id}`,
                method: "PATCH",
                body: socialMediaData,
            }),
            invalidatesTags: ["SocialMediaLink"],
        }),
        deleteSocialMediaLink: builder.mutation({
            query: (socialMediaData) => ({
                url: `/user/slink/${socialMediaData.id}`,
                method: "DELETE",
            }),
            invalidatesTags: ["SocialMediaLink"],
        }),
        addUserSkills: builder.mutation({
            query: (userSkillData) => ({
                url: "/user/skills",
                method: "POST",
                body: userSkillData,
            }),
            invalidatesTags: ["Skill"],
        }),
        getUserSkill: builder.query({
            query: () => "/user/skills",
            providesTags: ["Skill"],
        }),
        updateUserSkill: builder.mutation({
            query: (userSkillData) => ({
                url: `/user/skills/${userSkillData.id}`,
                method: "PATCH",
                body: userSkillData,
            }),
        }),
        deleteUserSkill: builder.mutation({
            query: (userSkillData) => ({
                url: `/user/skills/${userSkillData.id}`,
                method: "DELETE",
            }),
        }),
    }),
});

export const {
    useUserSignUpMutation,
    useUserLoginMutation,
    useGetUserQuery,
    useUpdateUserAddressMutation,

    useAddUserAddressMutation,
    useGetUserAddressQuery,
    useUpdateUserMutation,
    useDeleteUserAddressMutation,

    useAddSocialMediaLinkMutation,
    useGetSocialMediaLinkQuery,
    useUpdateSocialMediaLinkMutation,
    useDeleteSocialMediaLinkMutation,

    useAddUserSkillsMutation,
    useGetUserSkillQuery,
    useUpdateUserSkillMutation,
    useDeleteUserSkillMutation,
} = userApiSlice;

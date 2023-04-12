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
            query: () => "/user",
            providesTags: ["User"],
        }),
        getUserByUserId: builder.query({
            query: (userId) => `/user/show/${userId}`,
            providesTags: (result, error, userId) => [
                { type: "User", id: userId },
            ],
        }),
        updateUser: builder.mutation({
            query: (userData) => ({
                url: `/user/update`,
                method: "PATCH",
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
        getUserAddressByUserId: builder.query({
            query: (userId) => `/user/address/${userId}`,
            providesTags: (result, error, userId) => [
                { type: "Address", id: userId },
            ],
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
        getSocialMediaLinkByUserId: builder.query({
            query: (userId) => `/user/slink/${userId}`,
            providesTags: (result, error, userId) => [
                { type: "Slink", id: userId },
            ],
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
        getUserSkillByUserId: builder.query({
            query: (userId) => `/user/skills/${userId}`,
            providesTags: (result, error, userId) => [
                { type: "Skill", id: userId },
            ],
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
    useGetUserByUserIdQuery,
    useUpdateUserAddressMutation,

    useAddUserAddressMutation,
    useGetUserAddressQuery,
    useGetUserAddressByUserIdQuery,
    useUpdateUserMutation,
    useDeleteUserAddressMutation,

    useAddSocialMediaLinkMutation,
    useGetSocialMediaLinkQuery,
    useGetSocialMediaLinkByUserIdQuery,
    useUpdateSocialMediaLinkMutation,
    useDeleteSocialMediaLinkMutation,

    useAddUserSkillsMutation,
    useGetUserSkillQuery,
    useGetUserSkillByUserIdQuery,
    useUpdateUserSkillMutation,
    useDeleteUserSkillMutation,
} = userApiSlice;

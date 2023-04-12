import { createApi, fetchBaseQuery } from '@reduxjs/toolkit/query/react'

export const apiSlice = createApi({
    reducerPath: 'api',
    baseQuery: fetchBaseQuery({ 
        baseUrl: `${import.meta.env.VITE_API_BASE_URL}/api`,
        prepareHeaders:(headers) => {
            const token = localStorage.getItem("TOKEN");
            if(token){
                headers.set('Authorization', `Bearer ${token}`)
            }
        }
    }),
    tagTypes: ['User', 'Address', 'SocialMediaLink', 'Skill'],
    endpoints: (builder) => ({
    })   
})


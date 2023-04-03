import { createApi, fetchBaseQuery } from '@reduxjs/toolkit/query/react'

export const apiSlice = createApi({
    reducerPath: 'api',
    baseQuery: fetchBaseQuery({ 
        baseUrl: `${import.meta.env.VITE_API_BASE_URL}/api`,
        prepareHeaders:(headers) => {
            const token = '47|MCuiPrdlAKHxlwmWhxmO5OxOGG3yZbS3aGlwb0S6';
            if(token){
                headers.set('Authorization', `Bearer ${token}`)
            }
        }
    }),
    tagTypes: ['User', 'Address', 'SocialMediaLink', 'Skill'],
    endpoints: (builder) => ({
    })   
})


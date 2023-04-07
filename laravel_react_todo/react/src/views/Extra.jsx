import { LockClosedIcon } from "@heroicons/react/20/solid";
import { useEffect, useState } from "react";
import { Link } from "react-router-dom";
import { useAddSocialMediaLinkMutation, useGetSocialMediaLinkQuery, useGetUserAddressQuery, useGetUserQuery, useGetUserSkillQuery } from "../features/user/userSlice";
export default function Login() {
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const [addslink, { data, error, isLoading }] =
        useAddSocialMediaLinkMutation();

        const {data :user} = useGetUserQuery();
        const {data:userAddress} = useGetUserAddressQuery();
        const {data :userSlink} = useGetSocialMediaLinkQuery();
        const {data: userSkill} = useGetUserSkillQuery();

   

    useEffect(() => {
        console.log(userAddress);

        return () => {
            // console.log(data)
        };
    }, [userAddress]);

    return (
        <>
        <div>hello</div>
        </>
    );
}

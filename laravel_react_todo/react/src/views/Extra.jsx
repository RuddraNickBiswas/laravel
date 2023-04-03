import { LockClosedIcon } from "@heroicons/react/20/solid";
import { useEffect, useState } from "react";
import { Link } from "react-router-dom";
import { useStateContext } from "../contexts/ContextProvider";
import {
    useAddSocialMediaLinkMutation,
    useGetSocialMediaLinkQuery,
    useGetUserSkillQuery,
} from "../features/api/apiSlice";

export default function Login() {
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const [addslink, { data, error, isLoading }] =
        useAddSocialMediaLinkMutation();

    const onSubmit = async (ev) => {
        ev.preventDefault();
        const result = await addslink({
            social_media_name: "tacec",
            social_media_link: "https://www.facebook.com/myprofile",
            visibility: "a",
        });

        if ("error" in result) {
            // console.log(result.error.data);
        } else {
            // console.log(result.data)
        }
    };

    useEffect(() => {
        console.log(data);

        return () => {
            // console.log(data)
        };
    }, [data]);

    return (
        <>
            <h2 className="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">
                Sign in to your account
            </h2>
            <p className="mt-2 text-center text-sm text-gray-600">
                Or{" "}
                <Link
                    to="/signup"
                    className="font-medium text-indigo-600 hover:text-indigo-500"
                >
                    signup for free
                </Link>
            </p>

            <form
                onSubmit={onSubmit}
                className="mt-8 space-y-6"
                action="#"
                method="POST"
            >
                <input type="hidden" name="remember" defaultValue="true" />
                <div className="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label htmlFor="email-address" className="sr-only">
                            Email address
                        </label>
                        <input
                            id="email-address"
                            name="email"
                            type="email"
                            autoComplete="email"
                            required
                            value={email}
                            onChange={(ev) => setEmail(ev.target.value)}
                            className="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            placeholder="Email address"
                        />
                    </div>
                    <div>
                        <label htmlFor="password" className="sr-only">
                            Password
                        </label>
                        <input
                            id="password"
                            name="password"
                            type="password"
                            autoComplete="current-password"
                            required
                            value={password}
                            onChange={(ev) => setPassword(ev.target.value)}
                            className="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            placeholder="Password"
                        />
                    </div>
                </div>

                <div>
                    <button
                        type="submit"
                        className="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    >
                        <span className="absolute inset-y-0 left-0 flex items-center pl-3">
                            <LockClosedIcon
                                className="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                                aria-hidden="true"
                            />
                        </span>
                        Sign in
                    </button>
                </div>
            </form>
            {isLoading ? (
                <p>Loading address data...</p>
            ) : error ? (
                <p>Error fetching address data</p>
            ) : (
                <div>
                    {/* {data.data.map((skill) => (
                          <div key={skill.id}>
                              <p>{skill.social_media_link}</p>
                              <p>{skill.skill_type}</p>
                              <p>{skill.progress}</p>
                          </div>
                      ))} */}
                </div>
            )}
        </>
    );
}

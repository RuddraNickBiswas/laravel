import React from "react";
import { useDispatch, useSelector } from "react-redux";
import {
    addCurrentUser,
    selectCurrentUser,
} from "../features/user/currentUserSlice";

export default function ER() {
    const user = useSelector(selectCurrentUser);
    const dispatch = useDispatch();
    console.log(user)
    const name = 'Nick'
    const email = 'nick@gmail.com'
    const onClick = () => {
        dispatch(
            addCurrentUser(name, email)
        );
    };

    // console.log(user);
    return (
        <div>
            <p>{user.name}</p>
            <button onClick={onClick}>hey</button>
        </div>
    );
}

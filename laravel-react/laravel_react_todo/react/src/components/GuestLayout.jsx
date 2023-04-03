import React from 'react'
import { Outlet } from 'react-router-dom'

export default function GuestLayout() {
  return (
    <div>
        <h3>Guest Layout</h3>
        <Outlet/>
    </div>
  )
}

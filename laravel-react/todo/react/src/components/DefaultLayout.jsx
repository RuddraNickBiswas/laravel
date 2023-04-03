import React from 'react'
import { Outlet } from 'react-router-dom'

export default function DefaultLayout() {
  return (
    <div>
        <h3>Defaul Layout</h3>
        <Outlet/>
    </div>
  )
}

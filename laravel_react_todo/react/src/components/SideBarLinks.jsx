/* eslint-disable jsx-a11y/anchor-is-valid */
import * as React from 'react';
import Box from '@mui/material/Box';
import Link from '@mui/material/Link';
import LinkIcon from '@mui/icons-material/Link';
const preventDefault = (event) => event.preventDefault();

export default function SideBarLinks({link}) {
  return (
    <Box
      sx={{
        display:'flex',
        flexDirection:'row',
        width:'100%',
        justifyContent:'start',
        alignContent:'center',
        alignItems:'center',
        justifyItems:'center',
        overflow:'hidden',
      }}
    >
        <LinkIcon sx={{
            color:(theme)=>theme.palette.grey[500],
            mr:2,
        }}/>
      <Link href={link} variant='body2'>{link}</Link>
    </Box>
  );
}
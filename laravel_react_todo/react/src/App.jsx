import { useState } from 'react'
import { BeakerIcon } from '@heroicons/react/24/solid'

function MyComponent() {
  return (
    <div>
      <BeakerIcon className="h-6 w-6 text-blue-500"/>
      <p>...</p>
    </div>
  )
}


function App() {
  const [count, setCount] = useState(0)

  return (
  <div className='bg-slate-800'>
    <BeakerIcon className='text-cyan-600'/>
  </div> 
  )
}

export default App

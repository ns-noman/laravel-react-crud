import React from 'react'

export default function Loading() {
  return (
    <div className='container mt-3'>
        <div className="spinner-border text-info" role="status">
        </div><span className="visually-visible">Loading... please wait...</span>
    </div>
  )
}

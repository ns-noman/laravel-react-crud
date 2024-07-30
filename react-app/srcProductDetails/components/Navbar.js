import React from 'react'
import { Link } from 'react-router-dom'

export default function Navbar() {
  return (
  <>
    <nav className="navbar navbar-expand-lg bg-body-tertiary shadow">
        <div className="container">
            <Link className="navbar-brand" to="#">Navbar</Link>
            <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span className="navbar-toggler-icon"></span>
            </button>
            <div className="collapse navbar-collapse" id="navbarSupportedContent">
            <ul className="navbar-nav ms-auto mb-2 mb-lg-0">
                <li className="nav-item">
                    <Link className="nav-link active" to="/">Home</Link>
                </li>
                <li className="nav-item">
                    <Link className="nav-link" to="/magnifier">Magnifier</Link>
                </li>
                <li className="nav-item">
                    <Link className="nav-link" to="/product-details">Product Details</Link>
                </li>
                <li className="nav-item">
                    <Link className="nav-link" to="/about-us">About Us</Link>
                </li>
                <li className="nav-item">
                    <Link className="nav-link" to="/contact-us">Contact</Link>
                </li>
                <li className="nav-item">
                    <Link className="nav-link" to="/students">Students</Link>
                </li>
            </ul>
            </div>
        </div>
        </nav>
  </>
  )
}

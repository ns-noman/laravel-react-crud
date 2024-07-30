import React from 'react'
import Home from '../pages/Home';
import About from '../pages/About';
import Contact from '../pages/Contact';
import Student from '../pages/Student';
import StudentCreate from '../pages/StudentCreate';
import StudentEdit from '../pages/StudentEdit';
import { Route, Routes } from 'react-router-dom';
import ProductDetails from '../pages/ProductDetails';
import Magnifier from '../pages/Magnifier';


function MyRouter() {
  return (
    <Routes>
        <Route path="/" element={<Home/>} />
        <Route path="/product-details" element={<ProductDetails/>} />
        <Route path="/magnifier" element={<Magnifier/>} />
        <Route path="/about-us" element={<About/>} />
        <Route path="/contact-us" element={<Contact/>} />
        <Route path="/students" element={<Student/>} />
        <Route path="/students/create" element={<StudentCreate/>} />
        <Route path="/students/:id/edit" element={<StudentEdit/>} />
    </Routes>
  )
}
export default MyRouter;
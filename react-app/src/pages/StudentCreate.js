import axios from 'axios';
import React, { useState, useCallback } from 'react';
import { Link, useNavigate } from 'react-router-dom';
import Swal from 'sweetalert2';

export default function StudentCreate() {
  const navigate = useNavigate();

  // State variables
  const [inputErrorList, setInputErrorList] = useState({});
  const [student, setStudent] = useState({
    name: '',
    course: '',
    email: '',
    phone: '',
  });

  // Function to handle input changes using useCallback
  const handleInput = useCallback((e) => {
    const { name, value } = e.target;
    setStudent((prevStudent) => ({
      ...prevStudent,
      [name]: value,
    }));
  }, []);

  // Function to handle form submission
  const saveStudent = async (e) => {
    e.preventDefault();

    try {
      const response = await axios.post('http://127.0.0.1:8000/api/students', student);
      // After successful submission, set a successful state or navigate
      Swal.fire(
        'Success!',
        'Student record has been created successfully.',
        'success'
      );
      setStudent({ name: '', course: '', email: '', phone: '' });
      navigate('/students');
    } catch (error) {
      if (error.response) {
        if (error.response.status === 422) {
          setInputErrorList(error.response.data.errors);
        } else if (error.response.status === 500) {
          alert(error.response.data.message);
        }
      } else {
        alert('Network error occurred. Please try again later.');
      }
    }
  };


  return (
    <div className="container mt-5">
      <div className="row">
        <div className="col-md-12">
          <div className="card">
            <div className="card-header">
              <h4>
                Student Create
                <Link to="/students" className="btn btn-danger float-end">
                  Back
                </Link>
              </h4>
            </div>
            <div className="card-body">
              <form onSubmit={saveStudent}>
                <div className="mb-3">
                  <label className="form-label">Name</label>
                  <input
                    type="text"
                    name="name"
                    value={student.name}
                    onChange={handleInput}
                    className="form-control"
                    placeholder="Enter your Name here..."
                  />
                  <span className="text-danger">{inputErrorList.name}</span>
                </div>
                <div className="mb-3">
                  <label className="form-label">Course</label>
                  <input
                    type="text"
                    name="course"
                    value={student.course}
                    onChange={handleInput}
                    className="form-control"
                    placeholder="Enter your Course here..."
                  />
                  <span className="text-danger">{inputErrorList.course}</span>
                </div>
                <div className="mb-3">
                  <label className="form-label">Email</label>
                  <input
                    type="email"
                    name="email"
                    value={student.email}
                    onChange={handleInput}
                    className="form-control"
                    placeholder="Enter your Email here..."
                  />
                  <span className="text-danger">{inputErrorList.email}</span>
                </div>
                <div className="mb-3">
                  <label className="form-label">Phone</label>
                  <input
                    type="number"
                    name="phone"
                    value={student.phone}
                    onChange={handleInput}
                    className="form-control"
                    placeholder="Enter your Phone here..."
                  />
                  <span className="text-danger">{inputErrorList.phone}</span>
                </div>
                <div className="mb-3">
                  <button type="submit" className="form-control btn btn-primary">
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

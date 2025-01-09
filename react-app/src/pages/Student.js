import React, { useEffect, useState } from 'react';
import { Link } from "react-router-dom";
import axios from "axios";
import Loading from '../components/Loading';
import Swal from 'sweetalert2';

export default function Student() {
  const [loading, setLoading] = useState(true);
  const [students, setStudents] = useState([]);

  // Fetch students on component mount
  useEffect(() => {
    axios.get(`http://127.0.0.1:8000/api/students`)
      .then(res => {
        setStudents(res.data.students);
        setLoading(false);
      })
      .catch(error => {
        console.error("Error fetching students:", error);
        setLoading(false);
      });
  }, []);

  // Delete Student
  const deleteStudent = (id) => {
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        axios.delete(`http://127.0.0.1:8000/api/students/${id}/delete`)
          .then(res => {
            Swal.fire(
              'Deleted!',
              'Student has been deleted.',
              'success'
            );
            setStudents(students.filter(student => student.id !== id));
          })
          .catch(error => {
            if (error.response) {
              if (error.response.status === 404) {
                Swal.fire('Error!', 'Student not found.', 'error');
              } else if (error.response.status === 500) {
                Swal.fire('Error!', 'Something went wrong.', 'error');
              }
            }
          });
      }
    });
  };

  // Render Loading Spinner or Students Table
  if (loading) {
    return <Loading />;
  }

  // Display student details
  return (
    <div className="container mt-5">
      <div className="row">
        <div className="col-md-12">
          <div className="card">
            <div className="card-header">
              <h4>
                Student List
                <Link to="/students/create" className='btn btn-primary float-end'>Add Student</Link>
              </h4>
            </div>
            <div className="card-body">
              <table className="table table-stripped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  {students.map((student, index) => (
                    <tr key={student.id}>
                      <td>{index + 1}</td>
                      <td>{student.name}</td>
                      <td>{student.course}</td>
                      <td>{student.email}</td>
                      <td>{student.phone}</td>
                      <td>
                        <Link to={`../students/${student.id}/edit`} className='btn btn-success'>
                          Edit
                        </Link>
                      </td>
                      <td>
                        <button
                          onClick={() => deleteStudent(student.id)}
                          className='btn btn-danger'>
                          Delete
                        </button>
                      </td>
                    </tr>
                  ))}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}
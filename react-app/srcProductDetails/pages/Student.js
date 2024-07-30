import React, { useEffect, useState } from 'react'
import { Link } from "react-router-dom";
import axios from "axios";
import Loading from '../components/Loading';

export default function Student() {

    const [loading, setLoading] = useState(true);
    const [students, setStudents] = useState([]);

    useEffect(() => {
    axios.get(`http://localhost/REACT/TOOLS/LARAVEL_REACT_CRUD/laravel-app/api/students`).then(res=>{
        setStudents(res.data.students);
        setLoading(false);
    })
    }, [])

    if(loading){
        return(
            <Loading/>
        )
    }

var studentDetails = '';

    studentDetails = students.map((item,index)=>{
            return (
            <tr key={index}>
                <td>{index+1}</td>
                <td>{item.name}</td>
                <td>{item.course}</td>
                <td>{item.email}</td>
                <td>{item.phone}</td>
                <td>
                    <Link to={`../students/${item.id}/edit`} className='btn btn-success'>
                        Edit
                    </Link>
                </td>
                <td>
                    <Link onClick={(e)=>{deleteStudent(e,item.id)}} className='btn btn-danger'>
                        Delete
                    </Link>
                </td>
            </tr>
        )
    })
    const deleteStudent = (e, id)=>{
        e.preventDefault();
        const thisClicked = e.currentTarget;
        thisClicked.innerText = "Deleting...";
        axios.delete(`http://127.0.0.1:8000/api/students/${id}/delete`).then(res=>{
            setLoading(false);
            thisClicked.closest('tr').remove();
        })
        .catch(function(error){
            if(error.response){
                if(error.response.status === 404){
                    setLoading(false);
                    thisClicked.innerText = "Delete";
                }
                if(error.response.status === 500){
                    alert(error.response.data.message);
                    setLoading(false);
                }
            }
        });
    }




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
                                {studentDetails}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  )
}

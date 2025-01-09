import axios from 'axios';
import React, { useEffect, useState } from 'react'
import { Link, useParams, useNavigate } from 'react-router-dom'
import Loading from '../components/Loading';
import Swal from 'sweetalert2';

export default function StudentEdit() {
    const navigate = useNavigate();
    const {id} = useParams();

    const [loading, setLoading] = useState(true);
    const [inputErrorList, setInputErrorList] = useState({});
    const [student,setStudent] = useState({});
    const handleInput = (e)=>{
        e.persist();
        setStudent({...student,[e.target.name]:e.target.value})
    }
    useEffect(() => {
        axios.get(`http://127.0.0.1:8000/api/students/${id}/edit`).then(res=>{
            setStudent(res.data.student);
            setLoading(false);
        })
        .catch(function(error){
            if(error.response){
                if(error.response.status === 404){
                    setInputErrorList(error.response.data.errors);
                    setLoading(false);
                }
            }
        });
    }, [id])

    if(loading){return(<Loading/>)}

    if(Object.keys(student).length===0){
        return(
            <div className='container'>
                <h1 className='text-danger'>No such a student found!</h1>
            </div>
        )
    }

    const updateStudent = (e)=>{
        e.preventDefault();
        setLoading(true);
        const data = {
            name: student.name,
            course: student.course,
            email: student.email,
            phone: student.phone,
        };
        axios.put(`http://127.0.0.1:8000/api/students/${id}/update`, data)
        .then(res=>{
             Swal.fire(
                'Updated!',
                'Student has been updated!',
                'success'
            );
            setLoading(false);
            navigate('/students');
        })
        .catch(function(error){
            if(error.response){
                if(error.response.status === 422){
                    setInputErrorList(error.response.data.errors);
                    setLoading(false);
                }
                if(error.response.status === 404){
                    setInputErrorList(error.response.data.errors);
                    setLoading(false);
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
                            Student Edit
                            <Link to="/students" className='btn btn-danger float-end'>Back</Link>
                        </h4>
                    </div>
                    <div className="card-body">
                        <form onSubmit={updateStudent}>
                            <div class="mb-3">
                                <label className="form-label">Name</label>
                                <input type="text" name="name" value={student.name} onChange={handleInput} className="form-control" placeholder="Enter your Name here..."/>
                                <span className='text-danger'>{inputErrorList.name}</span>
                            </div>
                            <div class="mb-3">
                                <label className="form-label">Course</label>
                                <input type="text" name="course" value={student.course} onChange={handleInput} className="form-control" placeholder="Enter your Course here..."/>
                                <span className='text-danger'>{inputErrorList.course}</span>
                            </div>
                            <div class="mb-3">
                                <label className="form-label">Email</label>
                                <input type="email" name="email" value={student.email} onChange={handleInput} className="form-control" placeholder="Enter your Email here..."/>
                                <span className='text-danger'>{inputErrorList.email}</span>
                            </div>
                            <div class="mb-3">
                                <label className="form-label">Phone</label>
                                <input type="number" name="phone" value={student.phone} onChange={handleInput} className="form-control" placeholder="Enter your Phone here..."/>
                                <span className='text-danger'>{inputErrorList.phone}</span>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="phone" className="form-control btn btn-primary">Update Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  )
}

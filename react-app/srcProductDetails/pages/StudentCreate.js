import axios from 'axios';
import React, { useState } from 'react'
import { Link, useNavigate } from 'react-router-dom'
import Loading from '../components/Loading';

export default function StudentCreate() {

    const navigate = useNavigate();

    const [loading, setLoading] = useState(false);
    const [inputErrorList, setInputErrorList] = useState({});
    const [student,setStudent] = useState({
        name:'',
        course:'',
        email:'',
        phone:'',
    });
    const handleInput = (e)=>{
        e.persist();
        setStudent({...student,[e.target.name]:e.target.value})
    }
    if(loading){return(<Loading/>)}
    const saveStudent = (e)=>{
        e.preventDefault();
        setLoading(true);
        const data = {
            name: student.name,
            course: student.course,
            email: student.email,
            phone: student.phone,
        };
        axios.post(`http://localhost/REACT/TOOLS/LARAVEL_REACT_CRUD/laravel-app/api/students`, data).then(res=>{
            navigate('/students');
            setLoading(false);
        })
        .catch(function(error){
            if(error.response){
                if(error.response.status === 422){
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

 const RecoverForm = ()=>{
        return <form key="HEllo" onSubmit={saveStudent}>
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
                    <button type="submit" name="phone" className="form-control btn btn-primary">Submit</button>
                </div>
            </form>
    }
    
  return (
    <div className="container mt-5">
        <div className="row">
            <div className="col-md-12">
                <div className="card">
                    <div className="card-header">
                        <h4>
                            Student Create
                            <Link to="/students" className='btn btn-danger float-end'>Back</Link>
                        </h4>
                    </div>
                    <div className="card-body">
                        {<RecoverForm />}
                    </div>
                </div>
            </div>
        </div>
    </div>
  )
}

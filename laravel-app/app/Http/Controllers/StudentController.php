<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return response()->json(['status'=>200,'students'=>$students]);
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data,
        [
            'name'=>'required|string|max:50',
            'course'=>'required|string|max:50',
            'email'=>'required|email|max:50',
            'phone'=>'required|digits:11',
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=> 422,
                'errors'=> $validator->messages()
            ], 422);
        }
        $student = Student::create($data);

        if($student){
            return response()->json(['status'=>200,'message'=>"Saved successfully!"],200);
        }
        return response()->json(['status'=>500,'message'=>"Something went wrong!"],500);
    }
    public function show(Student $student)
    {
        //
    }

    public function edit($id)
    {
        $student = Student::find($id);
        if($student){
            return response()->json(['status'=>200,'student'=>$student],200);
        }else{
            return response()->json(['status'=>404,'message'=>'No student found!'],404);
        }
    }

    public function update(Request $request,$id)
    {
        $data = $request->all();
        $validator = Validator::make($data,
        [
            'name'=>'required|string|max:50',
            'course'=>'required|string|max:50',
            'email'=>'required|email|max:50',
            'phone'=>'required|digits:11',
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=> 422,
                'errors'=> $validator->messages()
            ], 422);
        }
        $student = Student::find($id);
        if(!$student){
            return response()->json([
                'status'=> 404,
                'message'=>'No Student Found!'
            ], 404);
        }
        $student->update($data);
        if($student){
            return response()->json(['status'=>200,'message'=>"Updated Successfully!"],200);
        }
        return response()->json(['status'=>500,'message'=>"Something went wrong!"],500);
    }
    public function destroy($id)
    {
        $student = Student::find($id);
        if($student){
            if($student->delete()){
                return response()->json(['status'=>200,'message'=>'Deleted Successfully!'],200);
            }else{
                return response()->json(['status'=>500,'message'=>"Something went wrong!"],500);
            }
        }else{
            return response()->json(['status'=>404,'message'=>'No student found!'],404);
        }
    }
}

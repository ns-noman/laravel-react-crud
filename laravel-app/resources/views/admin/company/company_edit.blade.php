@extends('layouts.master')

@section('content')
<div class="container-fluid">
  <div class="container">
    <div class="card">
      <div class="card-body">
    <form class="row g-3" method="POST" action="{{url('company/'.$comshow->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')          
       
        <div class="col-md-4">
          <label for="inputEmail4" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$comshow->companyName}}" placeholder="Enter Company Name">
        </div>
        <div class="col-md-4">
          <label for="inputPassword4" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{$comshow->companyEmail}}"placeholder="Enter Company Email ">
        </div>
        <div class="col-md-4">
            <label for="inputPassword4" class="form-label">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone" value="{{$comshow->phone}}" placeholder="Enter Company Phone">
          </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" name="address" value="{{$comshow->address}}" placeholder="Enter Company Address">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Image</label>
          <input type="file" id="companyImage" name="companyImage" class="form-control">
        </div>
        
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
    </div>
    </div>
</div>


 @endsection
          <!-- ============================================================== -->
          <!-- End Container fluid  -->
          <!-- ============================================================== -->
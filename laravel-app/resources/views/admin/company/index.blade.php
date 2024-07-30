@extends('layouts.master')

@section('content')
<div class="container-fluid">
  <div class="container">
<div class="card ">
    <div class="card-body">
      <h5 class="card-title">Company Details</h5>
      <div class="table-responsive">
        <table
          id="zero_config"
          class="table table-striped table-bordered table-success">
          <tbody>
            <tr>
                <td>Company Name</td>
                <td>{{$comdetails['companyName']}}</td>
            </tr> 
            <tr>
                <td>Company Email</td>
                <td>{{$comdetails['companyEmail']}}</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>{{$comdetails['phone']}}</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>{{$comdetails['address']}}</td>
            </tr>
            <tr>
                <td>Logo</td>
                <td>
                  <img src="{{asset('upload/' .$comdetails['logo'])}}" alt="logoimage" height="70" width="70">
                </td>
            </tr>     
          </tbody>
        </table>
        <div>
          <a href="{{url('company/'.$comdetails['id'].'/edit')}}">
            <button class="btn btn-info">Edit</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
          <!-- ============================================================== -->
          <!-- End Container fluid  -->
          <!-- ============================================================== -->

@extends('layouts.master')
@section('content')
@if (session()->get('userData')[0]->roleid==1)
<section id="main-content">
<div class="card m-1 p-1">
    <h4>Create User</h4>
    <div class="bootstrap-data-table-panel">
        <div class="table-responsive">
            <a href="{{ url('usermanageCreate') }}"class="btn btn-primary mb-3"> Add New User </a>
            <table id="example1" class="table table-striped table-bordered table-centre">
                <thead>
                    <tr>
                        <th>Srl.</th>
                        <th>Full Name</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Contact No.</th>
                        <th>Reference Person</th>
                        <th>National ID</th>
                        <th>Agreement Paper</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>
                                @php
                                if($user->roleid==1)
                                {
                                    echo 'Admin';
                                }
                                else {
                                    echo 'General Admin';
                                }
                                @endphp
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->contact_no }}</td>
                            <td>{{ $user->reference_by }}</td>
                            <td>
                                <img height="100" width="100px" src="{{ asset('upload/'.$user->nationalid) }}" alt="img">
                            </td>
                            <td>
                                <img height="100" width="100px" src="{{ asset('upload/'.$user->agreement_paper) }}" alt="img">
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{url('usermanageEdit/'.$user->id) }}"
                                        class="btn btn-info"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{url('usermanageDestroy/'.$user->id) }}"
                                        class="btn btn-danger"><i
                                        class="fa-solid fa-trash-can"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
@else
    <h4>Sorry! Link is not found.</h4>
@endif

@endsection



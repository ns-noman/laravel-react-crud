@extends('layouts.master')
@section('content')
@if (session()->get('userData')[0]->roleid==1)
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-5">
                    <div class="card-title">
                        <h4 class="p-3">Edit User</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ url('usermanage') }}" method="POST" enctype="multipart/form-data">
                                @csrf()
                                @method('PATCH')
                                <div class="row">
                                    <input hidden value="{{ $user->id }}" type="text" class="form-control" required name="id">
                                    <div class="form-group col-6">
                                        <label>Full Name</label>
                                        <input value="{{ $user->name }}" type="text" class="form-control" required name="username" placeholder="Full Name">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>User Role</label>
                                        <select class="form-control" required name="userrolle">
                                            <option value='' selected >Select User Role</option>
                                            @foreach ($role as $item)
                                            <option 
                                            @if ($user->roleid==$item->id)
                                                selected
                                            @endif
                                            value="{{ $item->id }}">{{ $item->role }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Email</label>
                                        <input value="{{ $user->email }}" type="text" class="form-control" required name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Address</label>
                                        <input value="{{ $user->address }}" type="text" class="form-control" required name="address" placeholder="Address">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Contact No.</label>
                                        <input value="{{ $user->contact_no }}" type="number" class="form-control" required name="contactno" placeholder="01XXXXXXXXX">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Reference Person</label>
                                        <input value="{{ $user->reference_by }}" type="text" class="form-control" name="referenceper" placeholder="Reference Person">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>National ID</label>
                                        <input type="file" class="form-control" name="nationalid">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Agreement Paper</label>
                                        <input type="file" class="form-control" name="agreementpaper">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Password</label>
                                        <input type="password" class="form-control" required id="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Confirm Password</label>
                                        <input type="password" onkeyup="checkPassword()" class="form-control" required id="conpassword" name="conpassword" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-primary ml-2 mt-3">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
@else
<h4>Sorry! Link is not found.</h4>
@endif

@endsection
@section('script')
<script type="text/javascript">
function checkPassword()
{
    var x = document.getElementById("password").value;
    var y = document.getElementById("conpassword").value;
    if(x==y)
    {
    
    var input = document.getElementById("conpassword");
        input.style.borderColor = 'green';
    }
    else
    {
    var input = document.getElementById("conpassword");
        input.style.borderColor = 'red';
    }
}
</script>
@endsection

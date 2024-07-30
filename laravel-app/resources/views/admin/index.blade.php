@extends('layouts.master')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-sm-6">
            
            <div class="small-box bg-info">
                <div class="inner">
                <h3></h3>
                <p>Total Sales</p>
                </div>
                <div class="icon">
                <i class="ion ion-bag"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="small-box bg-success">
            <div class="inner">
            <h3><sup style="font-size: 20px"></sup></h3>
            <p>This Month Sales</p>
            </div>
            <div class="icon">
            <i class="ion ion-stats-bars"></i>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="small-box bg-warning">
                <div class="inner">
                <h3></h3>
                <p>Todays Sales</p>
                </div>
                <div class="icon">
                <i class="ion ion-person-add"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
        <div class="small-box bg-info">
            <div class="inner">
            <h3></h3>
            <p>Invoice</p>
            </div>
            <div class="icon">
            <i class="ion ion-bag"></i>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
        <div class="small-box bg-success">
            <div class="inner">
            <h3><sup style="font-size: 20px"></sup></h3>
            <p>Customer</p>
            </div>
            <div class="icon">
            <i class="ion ion-stats-bars"></i>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
        <div class="small-box bg-warning">
            <div class="inner">
            <h3></h3>
            <p>Supplier</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
        <div class="small-box bg-info">
            <div class="inner">
            <h3></h3>
            <p>Customers Dues</p>
            </div>
            <div class="icon">
            <i class="ion ion-bag"></i>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
        <div class="small-box bg-success">
            <div class="inner">
            <h3><sup style="font-size: 20px"></sup></h3>
            <p>Pending Demand Order</p>
            </div>
            <div class="icon">
            <i class="ion ion-stats-bars"></i>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
        <div class="small-box bg-warning">
            <div class="inner">
            <h3></h3>
            <p>Users</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

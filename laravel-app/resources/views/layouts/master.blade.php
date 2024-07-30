@php
    $roleid = session()->get('userData')[0]->roleid;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AHN Builders</title>
    
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin_assets') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('admin_assets') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('admin_assets') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin_assets') }}/dist/css/adminlte.min.css">
    <!-- Normalization -->
    <link
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css" integrity="sha512-pTaEn+6gF1IeWv3W1+7X7eM60TFu/agjgoHmYhAfLEU8Phuf6JKiiE8YmsNC0aCgQv4192s4Vai8YZ6VNM6vyQ=="crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />

    <!-- fontwasome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin_assets') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    {{-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> --}}
    <!-- Tempusdominus Bootstrap 4 -->
    {{-- <link rel="stylesheet"
        href="{{ asset('admin_assets') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> --}}
    <!-- overlayScrollbars -->
    {{-- <link rel="stylesheet" href="{{ asset('admin_assets') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('admin_assets') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <!-- <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60"> -->
            <img class="img-profile rounded-circle" src="{{ asset('admin_assets') }}/dist/img/avatar5.png"
                height="30" width="30">
        </div>
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link"></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->

                        </li>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white-600 small">
                                    <b>
                                        @php
                                            if ($roleid == 1) {
                                                echo 'Admin';
                                            } elseif ($roleid == 2) {
                                                echo 'General Admin';
                                            } else {
                                                echo 'Sales Manager';
                                            }
                                        @endphp
                                    </b>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('admin_assets') }}/dist/img/avatar5.png" height="30"
                                    width="30">
                            </a>

                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item"
                                    href="{{ asset('admin_assets') }}/../Admin_Login/login-form-20/index.html"
                                    data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Are you sure you want to logout</div>
                    <div class="modal-footer">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" :href="route('logout')"
                                onclick="event.preventDefault();
                        this.closest('form').submit();">Logout</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#02182a;">
          {{-- background-color:#062541; --}}
            <!-- Brand Logo -->
            <a href="#" class="brand-link bg-info">
                <img src="{{ asset('admin_assets') }}/dist/img/avatar5.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">
                    {{ session()->get('userData')[0]->name }}
                </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="{{ url('/dashboard') }}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('usermanage') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-credit-card"></i>
                                <p>User Manage</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('company') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-credit-card"></i>
                                <p>Company Details</p>
                            </a>
                        </li>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            @yield('content')
            <!-- /.content -->
        </div>
        
        <!-- /.content-wrapper -->
        <footer class="main-footer justify-content-center">
            <div class="row">
                {{-- <div class="col-1"></div>
                <div class="float-center d-none d-sm-inline-block" style="margin: auto">
                    <strong class="justify-content-center">Copyright &copy; 2022-2023 <a href="http://www.sawebsoft.com/" target="_blank">SA Websoft Ltd.</a></strong>
                    All rights reserved.
                </div> --}}
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('admin_assets') }}/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin_assets') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin_assets') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('admin_assets') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>


    <!-- AdminLTE App -->
    <script src="{{ asset('admin_assets') }}/dist/js/adminlte.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('admin_assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin_assets') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('admin_assets') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('admin_assets') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('admin_assets') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('admin_assets') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('admin_assets') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('admin_assets') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('admin_assets') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('admin_assets') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('admin_assets') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('admin_assets') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->

{{-- Normalization Script --}}
<script
src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"
integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ=="
crossorigin="anonymous"
referrerpolicy="no-referrer"
></script>

    <script>
        // Noramlization
        $('.normalize').selectize();
        //End Normalization

        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                // "buttons": ["pdf", "print"]
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>

</body>
@yield('script')
</html>

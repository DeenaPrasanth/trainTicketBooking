<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png"  href="">
    <title>Booking</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />


     <!-- Favicon -->
     <link rel="shortcut icon" href="../../assets/images/favicon.png"/>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link href="{{ asset('backend/assets/css/bootstrap-icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/bootstrap-docs.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="../../assets/images/favicon.png"/>

<!-- Google fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


    <!-- Slick -->
<link rel="stylesheet" href="{{ asset('backend/assets/libs/slick/slick.css') }}" type="text/css">


        <!-- Prism -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/prism/prism.css') }}" type="text/css">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/animate/animate.min.css') }}" type="text/css">

    
    @livewireStyles
    <style>
        .form-group.required .col-form-label:after {
                    content:" *";
                    color: red;
                    weight:100px;
                    
                }
        .card-title {
            font-weight: bold;
        }      
        .col-sm-3,
        .col-lg-3,
        .col-lg-2,
        .col-md-6,
        .col-md-3{
            font-weight: bold;
        }  
        .col-md-4{
            font-weight: bold;
        }

    </style>

</head>

<body id="reloadDiv">
    <!-- Main navbar -->
    
<!-- notifications sidebar -->
<div class="sidebar" id="notifications">
    <div class="sidebar-header d-block align-items-end">
        <div class="align-items-center d-flex justify-content-between py-4">
            Notifications
            <button data-sidebar-close>
                <i class="bi bi-arrow-right"></i>
            </button>
        </div>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active nav-link-notify" data-bs-toggle="tab" href="#activities">Activities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
            </li>
        </ul>
    </div>
    <div class="sidebar-content">
        <div class="tab-content">
            <div class="tab-pane active" id="activities">
                <div class="tab-pane-body">
                    <ul class="list-group list-group-flush">
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-info me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-person"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold d-flex justify-content-between">
                                        You joined a group
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-warning me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-hdd"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold d-flex justify-content-between">
                                        Storage is running low!
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-secondary me-3">
                                            <span
                                                class="avatar-text rounded-circle">
                                                <i class="bi bi-file-text"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        1 person sent a file
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-success me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-download"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        Reports ready to download
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-info me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-lock"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        2 steps verification
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> 20 min ago
                                    </span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane-footer">
                    <a href="#" class="btn btn-success">
                        <i class="bi bi-check2 me-2"></i> Make All Read
                    </a>
                    <a href="#" class="btn btn-danger ms-2">
                        <i class="bi bi-trash me-2"></i> Delete all
                    </a>
                </div>
            </div>
            <div class="tab-pane" id="notes">
                <div class="tab-pane-body">
                    <ul class="list-group list-group-flush">
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                This month's report will be prepared.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Today
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                An email will be sent to the customer.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Today
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 d-flex justify-content-between">
                                The meeting will be held.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Yesterday
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                Conversation with users.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Yesterday
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-warning d-flex justify-content-between">
                                Payment refund will be made to the customer.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> 20 min ago
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 d-flex justify-content-between">
                                Payment form will be activated.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> 20 min ago
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane-footer">
                    <a href="#" class="btn btn-primary btn-block">
                        <i class="bi bi-plus me-2"></i> Add Notes
                    </a>
                </div>
            </div>
            <div class="tab-pane" id="alerts">
                <div class="tab-pane-body">
                    <ul class="list-group list-group-flush">
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-lock"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 fw-bold d-flex justify-content-between">
                                    Signed in with a different device.
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                            </div>
                        </li>
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text fw-bold rounded-circle">
                                            <i class="bi bi-file-text"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 fw-bold d-flex justify-content-between">
                                    Your billing information is not active.
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                            </div>
                        </li>
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-person"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 d-flex justify-content-between">
                                    Your subscription has expired.
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                            </div>
                        </li>
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-hdd"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 d-flex justify-content-between">
                                    Your storage space is running low
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane-footer">
                    <a href="#" class="btn btn-success">
                        <i class="bi bi-check2 me-2"></i> Make All Read
                    </a>
                    <a href="#" class="btn btn-danger ms-2">
                        <i class="bi bi-trash me-2"></i> Delete all
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./ notifications sidebar -->

<!-- settings sidebar -->
<div class="sidebar" id="settings">
    <div class="sidebar-header">
        <div>
            <i class="bi bi-gear me-2"></i>
            Settings
        </div>
        <button data-sidebar-close>
            <i class="bi bi-arrow-right"></i>
        </button>
    </div>
    <div class="sidebar-content">
        <ul class="list-group list-group-flush">
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked>
                    <label class="form-check-label" for="flexCheckDefault1">
                        Remember next visits
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" checked>
                    <label class="form-check-label" for="flexCheckDefault2">
                        Enable report generation.
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" checked>
                    <label class="form-check-label" for="flexCheckDefault3">
                        Allow notifications.
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                    <label class="form-check-label" for="flexCheckDefault4">
                        Hide user requests
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5" checked>
                    <label class="form-check-label" for="flexCheckDefault5">
                        Speed up demands
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Hide menus
                    </label>
                </div>
            </li>
        </ul>
    </div>
    <div class="sidebar-action">
        <a href="#" class="btn btn-primary">All Settings</a>
    </div>
</div>
<!-- ./ settings sidebar -->

<!-- search sidebar -->
<div class="sidebar" id="search">
    <div class="sidebar-header">
        Search
        <button data-sidebar-close>
            <i class="bi bi-arrow-right"></i>
        </button>
    </div>
    <div class="sidebar-content">
        <form class="mb-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" aria-describedby="button-search-addon">
                <button class="btn btn-outline-light" type="button" id="button-search-addon">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>
        <h6 class="mb-3">Last searched</h6>
        <div class="mb-4">
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Reports for 2021</a>
                <a href="#" class="btn text-danger btn-sm" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Current users</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Meeting notes</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
        </div>
        <h6 class="mb-3">Recently viewed</h6>
        <div class="mb-4">
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-secondary avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-check-circle"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Todo list</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-warning avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-wallet2"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Pricing table</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-info avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-gear"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Settings</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-success avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-person-circle"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Users</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-action">
        <a href="#" class="btn btn-danger">All Clear</a>
    </div>
</div>
<!-- ./ search sidebar -->

<!-- ./ sidebars -->
    <!-- /main navbar -->
    <div class="layout-wrapper">

<!-- header -->
<div class="header">
<div class="menu-toggle-btn"> <!-- Menu close button for mobile devices -->
    <a href="#">
        <i class="bi bi-list"></i>
    </a>
</div>
<!-- Logo -->
<a href="index.html" class="logo">
    <!-- <img width="100" src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo"> -->
</a>
<!-- ./ Logo -->
<div class="page-title">Upcoming Trains </div>

<div class="header-bar ms-auto">
    <ul class="navbar-nav justify-content-end">
        <li class="nav-item">
            <a href="{{route('login') }}" class="btn btn-info" >
                Login
            </a>
        </li>
        <br>
        <li class="nav-item">
            <a href="{{route('register-user') }}" class="btn btn-secondary" >
                Register
            </a>
        </li>
    </ul>
</div>
<!-- Header mobile buttons -->
<div class="header-mobile-buttons">
    <a href="#" class="search-bar-btn">
        <i class="bi bi-search"></i>
    </a>
    <a href="#" class="actions-btn">
        <i class="bi bi-three-dots"></i>
    </a>
</div>
<!-- ./ Header mobile buttons -->
</div>

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <!-- <div class="sidebar sidebar-light sidebar-main sidebar-expand-md"> -->

        <div class="menu">
    <div class="menu-header">
        <a href="index.html" class="menu-header-logo">
            <!-- <img src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo"> -->
        </a>
        <a href="index.html" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div>
    <div class="menu-body">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                
                <div>
                    <div class="fw-bold"> Train Booking</div>
                </div>
            </a>
           
        </div>
        
    </div>
</div>
            
        <!-- </div> -->
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!--content-->
            @yield('content')


            @include('layouts.footer')

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->



<script>
    var message = "{{session()->get('message')}}";
    var status = "{{session()->get('status')}}";

    if(message && status == true){
        swal({
            title: message,
            text: "{{ __('successfully') }}",
            icon: "success",
        }).then((value) => {        
            // window.location.href = "../driver-document/"+$('#driver_id').val();
        });
    }

    if(message && status == false){
        swal({
            title: "{{ __('errors') }}",
            text: message,
            icon: "error",
        }).then((value) => {        
            // window.location.href = "../driver-document/"+$('#driver_id').val();
        });
    }
 
   
    
</script>
@livewireScripts
<script src="{{ asset('backend/assets/libs/charts/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/buyer-dashboard.js') }}"></script>
<script src="{{ asset('backend/assets/js/app.min.js') }}"></script>
<script src="{{ asset('/main.js') }}"></script>


<!-- Slick -->
<script src="{{ asset('backend/assets/libs/slick/slick.min.js') }}"></script>

<!-- Examples -->
<script src="{{ asset('backend/assets/js/dashboard.js') }}"></script>


 <!-- Examples -->
 <script src="{{ asset('backend/assets/js/sweet-alert.js') }}"></script>

<!-- Prism -->
<script src="{{ asset('backend/assets/libs/prism/prism.js') }}"></script>
</body>


</html>

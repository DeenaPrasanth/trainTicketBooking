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
    <img width="100" src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
</a>
<!-- ./ Logo -->
<div class="page-title">Dashboard</div>
<form class="search-form">
    <div class="input-group">
        <button class="btn btn-outline-light" type="button" id="button-addon1">
            <i class="bi bi-search"></i>
        </button>
        <input type="text" class="form-control" placeholder="Search..."
               aria-label="Example text with button addon" aria-describedby="button-addon1">
        <a href="#" class="btn btn-outline-light close-header-search-bar">
            <i class="bi bi-x"></i>
        </a>
    </div>
</form>
<div class="header-bar ms-auto">
    <ul class="navbar-nav justify-content-end">
        <li class="nav-item">
            <a href="{{ route('signout') }}" class="btn btn-danger">Logout
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

            @include('layouts.sidebar')
            
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
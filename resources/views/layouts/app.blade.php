<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png"  href="{{ asset('backend/assets/images/favi-icon-96x96.png') }}">
    <title>Booking</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>

    
    
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
    <div class="navbar navbar-expand-md navbar-dark  navbar-static" style="background-color:#F21332">
        

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block" style="color:#fff">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>
            </ul>

            <span class="navbar-text ml-md-3" style="color:#fff">
                <span class="badge badge-mark border-success-300 mr-2"></span>

                Welcome,
            </span>
            <ul class="navbar-nav ml-md-auto">
                
            <li class="nav-item dropdown"  style="padding-top: 10px;">
					<span href="#" class="navbar-nav-link dropdown-toggle nofication" data-toggle="dropdown">
						<i class="icon-bubble-notification	font-size-base mr-2" style="font-size:16px;"></i>
						Notification
					</span>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header bg-light"  style="border-top:1px solid #ddd;">
							<span class="font-size-sm line-height-sm text-uppercase font-weight-semibold">Latest Notification</span>
						</div>

						<div class="dropdown-content-body dropdown-scrollable" id="test">
					
						</div>

						
					</div>
				</li>
                
                <li class="nav-item">
                    <form class="navbar-nav-link" method="POST" action="{{ route('signout') }}">
                        @csrf
                        
                        <button type="submit" class="btn" ><i class="icon-switch2"></i></button>
                    </form>
                    <span class="d-md-none ml-2">Logout</span>
                </li>


            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

     


        <!-- Main content -->
        <div class="content-wrapper">

            <!--content-->
            @yield('content')



        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>


</html>


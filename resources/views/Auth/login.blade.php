


<!doctype html>
<html lang="en">

<!-- Mirrored from vetra.laborasyon.com/demos/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Nov 2022 04:33:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png"  href="{{ asset('backend/assets/images/favi-icon-96x96.png') }}">
    <title>Booking</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png"/>

    <!-- Themify icons -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/themify-icons.css') }}" type="text/css">

    <!-- Main style file -->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="auth">

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->


    <div class="form-wrapper">
        <div class="container">
            <div class="card">
                <div class="row g-0">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="d-block d-lg-none text-center text-lg-start">
                                    <img width="120" src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
                                </div>
                                <div class="my-5 text-center text-lg-start">
                                    <h1 class="display-8">Sign In</h1>
                                    <p class="text-muted">Sign in to Ticket Booking to continue</p>
                                </div>
                                <form class="login-form mb-5" method="POST" action="{{ route('login.custom') }}">
                                                   @csrf
                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="Enter email" autofocus
                                               required>
                                               @if ($errors->has('email'))
                                                    <span class="form-text text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" name="password" id="password-field" class="form-control" placeholder="Enter password"
                                               required><div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                                               @if ($errors->has('password'))
                                    <span class="form-text text-danger">{{ $errors->first('password') }}</span>
                                @endif
                                    </div>
                                    <div class="text-center text-lg-start">
                                        <p class="small">Can't access your account? <a href="#">Reset your password now</a>.</p>
                                        <button class="btn btn-primary">Sign In</button>
                                    </div>
                                </form>
                                <div class="social-links justify-content-center">
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col d-none d-lg-flex border-start align-items-center justify-content-between flex-column text-center">
                        <div class="logo">
                            <img width="120" src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
                        </div>
                        <div>
                            <h3 class="fw-bold">Welcome to Ticket Booking!</h3>
                            <!-- <p class="lead my-5">If you don't have an account, would you like to register right now?</p> -->
                            <!-- <a href="#" class="btn btn-primary">Sign Up</a> -->
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Bundle scripts -->
<script src="{{ asset('backend/assets/libs/bundle.js') }}"></script>
<script src="{{ asset('backend/assets/js/app.min.js') }}"></script>

<script>
$(".toggle-password").click(function() {

$(this).toggleClass("icon-eye");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});
</script>
</body>


</html>
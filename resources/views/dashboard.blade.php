<!DOCTYPE html>
<html>
<head>
<title>Custom Auth in Laravel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
<div class="container">
<a class="navbar-brand mr-auto" href="#">Ticket Booking</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
@guest
<li class="nav-item">
<a class="nav-link" href="{{ route('login') }}">Login</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ route('register-user') }}">Register</a>
</li>
@else
<li class="nav-item">
<a class="nav-link" href="{{ route('signout') }}">Logout</a>
</li>
@endguest
</ul>
</div>
</div>
</nav>
@yield('content')
<div class="bd-example">
<div class="card">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">NO</th>
        <th scope="col">Train </th>
        <th scope="col">Train NO</th>
        <th scope="col">Available Seats</th>
        </tr>
    </thead>
    <tbody>
        @foreach($train as $key => $value)
        <tr>
        <td>{{++$key}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->train_number}}</td>
        <td>{{$value->available_seats}}</td>
        <td><button type="button" class="btn btn-success">Success</button></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

</div>
</body>
</html>
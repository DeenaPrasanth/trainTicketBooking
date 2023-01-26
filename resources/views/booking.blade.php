<!DOCTYPE html>
<html>
<head>
<title>Custom Auth in Laravel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
<div class="container">
<a class="navbar-brand mr-auto" href="#">Booking List</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

</div>
</nav>
@yield('content')
<div class="container">
<div class="bd-example">
<div class="card">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">NO</th>
        <th scope="col">Passenger</th>
        <th scope="col">Train</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($list as $key => $value)
        <tr>
        <td>{{++$key}}</td>
        <td>{{$value->passenger->name}}</td>
        <td>{{$value->train->name}}</td>
        <td>
            <a  href="{{ route('confirmTicket',$value->id) }}"title="Show">
                <button type="button" class="btn btn-success">Confirm</button>
            </a>
                                            
            <a href="{{ route('cancelTicket',$value->id) }}" title="Edit">
                <button type="button" class="btn btn-danger">Cancel</button>
            </a>            
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

</div>
</div>
</body>
</html>
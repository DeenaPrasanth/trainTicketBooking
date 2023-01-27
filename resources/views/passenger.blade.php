@extends('layouts.app')

@section('content')
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
<div class="container">
<a class="navbar-brand mr-auto" href="#">Passengers</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
</div>
</nav>
@yield('content')
<div class="bd-example">
<div class="card">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">NO</th>
        <th scope="col">name </th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Age</th>
        <th scope="col">Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach($list as $key => $value)
        <tr>
        <td>{{++$key}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->phone}}</td>
        <td>{{$value->age}}</td>
        <td>{{$value->address}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

</div>
@endsection
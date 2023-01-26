@extends('layouts.app')

@section('content')
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
<div class="container">
<a class="navbar-brand mr-auto" href="#">Ticket Booking</a>
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
        <th scope="col">Train </th>
        <th scope="col">Train NO</th>
        <th scope="col">Available Seats</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($train as $key => $value)
        <tr>
        <td>{{++$key}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->train_number}}</td>
        <td>{{$value->available_seats}}</td>
        <td>
            <a href="{{ route('ticket_booking',$value->id) }}" >
                <button  class="btn btn-success">Book now</button>
            </a>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

</div>
@endsection
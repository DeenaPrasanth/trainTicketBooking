@extends('layouts.home')

@section('content')

@yield('content')
<div class="bd-example">
<div class="card">
@livewire('counter', ['train' => $train ?? null])
    <!-- <table class="table">
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
    </table> -->
</div>

</div>
@endsection
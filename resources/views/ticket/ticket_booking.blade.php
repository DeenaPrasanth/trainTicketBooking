@extends('layouts.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right"style="float: right;padding:20px">
        @if (auth()->user())
            <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>
            @else
            <a class="btn btn-primary" href="{{ route('/') }}"> Back</a>
        @endif
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">  
<form action="{{ route('booking_store') }}" method="POST">
    @csrf
    <div class="card" style="padding:20px">
        <div class="col-sm-9">
            <div class="row">
                <div class="modal-body">
                    <div class="form-group row required">
                        <label class="col-form-label col-sm-3">{{ __('Name') }}</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required >
                            <input type="hidden" name="train_id" value="{{$data}}">
                        </div>
                    </div><br>
                    <div class="form-group row required">
                        <label class="col-form-label col-sm-3">{{ __('Email') }}</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email"  required >
                        </div>
                    </div><br>
                    <div class="form-group row required">
                        <label class="col-form-label col-sm-3">{{ __('Phone Number') }}</label>
                        <div class="col-sm-9">
                            <input type="number" name="phone" id="phone" class="form-control" placeholder="Phone Number" required >
                           
                        </div>
                    </div><br>
                    <div class="form-group row required">
                        <label class="col-form-label col-sm-3">{{ __('Age') }}</label>
                        <div class="col-sm-9">
                            <input type="number" name="age" id="age" class="form-control" placeholder="Age"  required>
                        </div>
                    </div><br>
                    <div class="form-group row ">
                        <label class="col-form-label col-sm-3">{{ __('Address') }}</label>
                        <div class="col-sm-9">
                        <textarea id="address" name="address" class="form-control" ></textarea>
                        </div>
                    </div><br>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form></div>
@endsection
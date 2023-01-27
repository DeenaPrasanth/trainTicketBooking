<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passenger;

class PassengerController extends Controller
{
    public function index()
    {
       $list = Passenger::get();

        return view('passenger', compact('list'));
    }
}
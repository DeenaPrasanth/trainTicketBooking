<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
       $train = Train::where('status',1)->get();

        return view('dashboard', compact('train'));
    }
}
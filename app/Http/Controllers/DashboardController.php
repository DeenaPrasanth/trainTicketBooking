<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    
    public function dashboard()
    {
        if(Auth::check()){

            $train = Train::where('status',1)->get();

            return view('dashboard', compact('train'));
        }
    
        return redirect("login")->withSuccess('are not allowed to access');
    }
     
    
}
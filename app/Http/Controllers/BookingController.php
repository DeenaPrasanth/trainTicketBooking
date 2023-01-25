<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Passenger;
use App\Models\Train;
use Mail;
use App\Mail\SendMail;

class BookingController extends Controller
{
    
    public function index()
    {
        $list = Booking::get();

        return view('booking', compact('list'));
    }

    public function confirmTicket($id)
    {
        $booking = Booking::where('id',$id)->first();
        $booking->confirm = 1;
        $booking->save();
        $list = Booking::get();
        $passenger = Passenger::where('id',$booking->passenger_id)->first();
        $train = Train::where('id',$booking->train_id)->first();
        
        $testMailData = [
            'title' => 'Ticket Booking',
            'body' => 'Your Train Booking is confirmed. Your Train Number is' .$train->train_number.'',
            'name' => $passenger->name
        ];

        Mail::to($passenger->email)->send(new SendMail($testMailData));

        return view('booking', compact('list'));
    }

    public function cancelTicket($id)
    {
        $booking = Booking::where('id',$id)->first();
        $booking->cancelled = 1;
        $booking->save();
        $list = Booking::get();
        $passenger = Passenger::where('id',$booking->passenger_id)->first();
        
        $testMailData = [
            'title' => 'Ticket Booking',
            'body' => 'Your Train Booking has been cancelled.',
            'name' => $passenger->name
        ];

        Mail::to($passenger->email)->send(new SendMail($testMailData));

        return view('booking', compact('list'));
    }
     
    
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class EmailController extends Controller
{
    public function index()
    {
        $data = "hiddd";
        $testMailData = [
            'title' => 'Ticket Booking',
            'body' => 'Your Train Booking is confirmed. Your Train Number is' .$data.'',
            'name' => $data
        ];

        Mail::to('deena.nplus@gmail.com')->send(new SendMail($testMailData));

        dd('Success! Email has been sent successfully.');
    }
}
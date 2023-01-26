<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\DashboardController; 
use App\Http\Controllers\BookingController; 
use App\Models\Train;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    $train = Train::where('status',1)->get();

    return view('welcome', compact('train'));
})->name('/'); 
Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard'); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('signup', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('booking', [BookingController::class, 'index'])->name('booking'); 
Route::get('ticket_booking/{id}', [BookingController::class, 'create'])->name('ticket_booking');
Route::post('store', [BookingController::class, 'store'])->name('booking_store');


Route::get('confirm/{id}',[BookingController::class,'confirmTicket'])->name('confirmTicket');
Route::get('cancel/{id}',[BookingController::class,'cancelTicket'])->name('cancelTicket');
//mail
Route::get('/send-email', [EmailController::class, 'index']);
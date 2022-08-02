<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IvaoController;
use App\Http\Controllers\AirlineController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UnbookController;

/*
Language
*/

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

/*

Admins

*/

Route::resource('/admin/airlines', AirlineController::class)->middleware('auth', 'Staff');
Route::resource('/admin/airports', AirportController::class)->middleware('auth', 'Staff');
Route::resource('/admin/bookings', BookingController::class)->middleware('auth', 'Staff');

/*

Members

*/

Route::resource('/admin/users', UserController::class)->middleware('auth');
Route::resource('/booking/flights', FlightController::class);
Route::resource('/booking/flights/unbook', UnbookController::class);


/*

Nav

*/

Route::view('/', 'layouts/members/home')->name('Home');
Route::view('/briefing/pilots', 'layouts/members/pages/briefing/pilots')->name('PilotsBriefing');
Route::get('/booking/atc', function () {
    return redirect("https://tools.ivao.aero/event/CO/schedule/1753");
})->name('AtcBooking');
Route::view('/statistics', 'layouts/members/pages/statistics/statistics')->name('Statistics');
Route::view('/profile', 'layouts/members/pages/profile/profile')->name('Profile');

/*
IVAO Login
*/

Route::get('auth/ivao', [IvaoController::class, 'redirect'])->name('Login');
Route::get('auth/ivao/callback', [IvaoController::class, 'callback']);
Route::get('auth/ivao/logout', function () {
    Auth::logout();
    return redirect()->route('Home');
})->name('Logout');

<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchaseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('dashboard.home');
});

Route::prefix('dashboard')->middleware('auth')->name('dashboard.')->group(function () {

    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::resource('cities', CityController::class);

    Route::resource('purchases', PurchaseController::class)->only(['index', 'create', 'store']);

    Route::resource('attendance', AttendanceController::class)->only(['index']);

    Route::resource('packages', PackagesController::class);

    Route::resource('sessions', SessionsController::class);

    Route::resource('users', UserController::class);
});



Auth::routes();

<?php

use App\Http\Controllers\Guest\GuestController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [GuestController::class, 'index'])->name('guest.home');
Route::get('/about-us', [GuestController::class, 'about'])->name('guest.about');
Route::get('/brownie{id}', [GuestController::class, 'show'])->name('guest.show');

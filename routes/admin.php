<?php

use App\Http\Controllers\Admin\Admin\MyProfileController;
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

Route::view('/', 'admin.welcome')->name('home');

Route::get('my-profile', MyProfileController::class)->name('myProfile');


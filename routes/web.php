<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;

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
    return view('welcome');
});


Route::get('/home', [BaseController::class, 'home']);
Route::get('/service', [BaseController::class, 'service']);
Route::get('/company', [BaseController::class, 'company']);
Route::get('/contact-us', [BaseController::class, 'contact_us']);

Route::get('/adminsupport', [AdminController::class, 'index'])->name('login');
Route::post('/login', [AdminController::class, 'login']);

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
});
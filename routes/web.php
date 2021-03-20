<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandpageController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\Auth\RegisterController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[LandpageController::class,'landpage']);
Route::get('/key-generator',[LicenseController::class,'keyGenerator']);
Route::post('/create',[LicenseController::class,'createData'])->name('create.key');
Route::get('/getuser',[RegisterController::class,'getUser']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\API\patientReportAPIController;
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

Auth::routes();

Route::get('/home', [
    HomeController::class, 'index'
])->name('home');


Route::resource('users', 'UserController')->middleware('auth');


Route::resource('patientInformations', App\Http\Controllers\patientInformationsController::class);

Route::resource('patientInformations', App\Http\Controllers\patientInformationsController::class);

Route::get('patientreport', [patientReportAPIController::class, 'generatePDFreport']);

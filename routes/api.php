<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\patientReportAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('events', '\App\Http\Controllers\API\EventsAPIController');

Route::resource('laboratorydatas', '\App\Http\Controllers\API\LaboratorydataAPIController');

Route::resource('patient_informations', '\App\Http\Controllers\API\patientInformationAPIController');

Route::get('patientreport', [patientReportAPIController::class, 'generatePDFreport']);

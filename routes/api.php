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


Route::resource('cvs_htns', '\App\Http\Controllers\API\cvsHtnAPIController');


Route::resource('cvs_anginas', '\App\Http\Controllers\API\cvsAnginaAPIController');


Route::resource('cvs_nyhas', '\App\Http\Controllers\API\cvsNyhaAPIController');


Route::resource('cvs_pacemakers', '\App\Http\Controllers\API\cvsPacemakerAPIController');

Route::resource('cvs_mis', '\App\Http\Controllers\API\cvsMiAPIController');


Route::resource('resp_asthmas', '\App\Http\Controllers\API\respAsthmaAPIController');


Route::resource('resp_smokings', '\App\Http\Controllers\API\respSmokingAPIController');


Route::resource('resp_snorings', '\App\Http\Controllers\API\respSnoringAPIController');


Route::resource('respcoughs', '\App\Http\Controllers\API\respcoughAPIController');


Route::resource('re_sputa', '\App\Http\Controllers\API\reSputumAPIController');


Route::resource('cns_strokes', '\App\Http\Controllers\API\cnsStrokeAPIController');


Route::resource('cnse_pilesies', '\App\Http\Controllers\API\cnsePilesyAPIController');


Route::resource('cns_surgeries', '\App\Http\Controllers\API\cnsSurgeryAPIController');


Route::resource('cns_cognitives', '\App\Http\Controllers\API\cnsCognitiveAPIController');


Route::resource('renal_stones', '\App\Http\Controllers\API\renalStonesAPIController');

Route::resource('renal_failures', '\App\Http\Controllers\API\renalFailureAPIController');

Route::resource('renal_utis', '\App\Http\Controllers\API\renalUtiAPIController');

Route::resource('diabetes', '\App\Http\Controllers\API\diabetesAPIController');

Route::resource('hepatic_jaundices', '\App\Http\Controllers\API\hepaticJaundiceAPIController');

Route::resource('hepatic_refluxes', '\App\Http\Controllers\API\hepaticRefluxAPIController');


Route::resource('thyroids', '\App\Http\Controllers\API\thyroidAPIController');


Route::resource('steroids', '\App\Http\Controllers\API\steroidAPIController');


Route::resource('anaesthetichistories', '\App\Http\Controllers\API\anaesthetichistoryAPIController');


Route::resource('physical_exams', '\App\Http\Controllers\API\physicalExamAPIController');


Route::post('getallmedications', '\App\Http\Controllers\API\Medications@index');
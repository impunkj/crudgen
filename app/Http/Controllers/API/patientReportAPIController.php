<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\patientInformation;
use App\Models\Laboratorydata;
use App\Models\cvsHtn;
use App\Models\cvsMi;
use App\Models\cvsNyha;
use App\Models\cvsPacemaker;
use App\Models\cvsAngina;
use App\Models\respAsthma;
use App\Models\respSmoking;
use App\Models\respcough;
use App\Models\respSnoring;
use App\Models\reSputum;
use App\Models\cnsStroke;
use App\Models\cnsePilesy;
use App\Models\cnsSurgery;
use App\Models\cnsCognitive;
use App\Models\renalStones;
use App\Models\renalUti;
use App\Models\renalFailure;
use App\Models\diabetes;
use App\Models\hepaticJaundice;
use App\Models\hepaticReflux;
use App\Models\thyroid;
use App\Models\steroid;
use App\Models\frality;
use App\Models\anaesthetichistory;
use App\Models\physicalExam;
use App\Models\covid;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\File;
/**
 * Class patientInformationController
 * @package App\Http\Controllers\API
 */

class patientReportAPIController extends AppBaseController
{
 
	public function generatePDFreport(Request $request){
	  
      $patientID = $request->patientID;	  
	  $pationinfo = patientInformation::where('id', $patientID)->first();
	  $Laboratorydata = Laboratorydata::where('patientNo', $patientID)->first();
	  $Htn = cvsHtn::where('patientNo', $patientID)->first();
	  $cvsAngina = cvsAngina::where('patientNo', $patientID)->first();
	  $cvsMi = cvsMi::where('patientNo', $patientID)->first();
	  $cvsNyha = cvsNyha::where('patientNo', $patientID)->first();
	  $cvsPacemaker = cvsPacemaker::where('patientNo', $patientID)->first();
	  $respAsthma = respAsthma::where('patientNo', $patientID)->first();
	  $respSmoking = respSmoking::where('patientNo', $patientID)->first();
	  $respcough = respcough::where('patientNo', $patientID)->first();
	  $respSnoring = respSnoring::where('patientNo', $patientID)->first();
	  $reSputum = reSputum::where('patientNo', $patientID)->first();
	  $cnsStroke = cnsStroke::where('patientNo', $patientID)->first();
	  $cnsePilesy = cnsePilesy::where('patientNo', $patientID)->first();
	  $cnsSurgery = cnsSurgery::where('patientNo', $patientID)->first();
	  $cnsCognitive = cnsCognitive::where('patientNo', $patientID)->first();
	  $renalStones = renalStones::where('patientNo', $patientID)->first();
	  $renalUti = renalUti::where('patientNo', $patientID)->first();
	  $renalFailure = renalFailure::where('patientNo', $patientID)->first();
	  $diabetes = diabetes::where('patientNo', $patientID)->first();
	  $hepaticJaundice = hepaticJaundice::where('patientNo', $patientID)->first();
	  $hepaticReflux = hepaticReflux::where('patientNo', $patientID)->first();
	  $thyroid = thyroid::where('patientNo', $patientID)->first();
	  $steroid = steroid::where('patientNo', $patientID)->first();
	  $frality = frality::where('patientNo', $patientID)->first();
	  $anaesthetichistory = anaesthetichistory::where('patientNo', $patientID)->first();
	  $physicalExam = physicalExam::where('patientNo', $patientID)->first();
	  $covid = covid::where('patientNo', $patientID)->first();
	  $data = array(
		'pationinfo' => $pationinfo,
		'Laboratorydata' => $Laboratorydata,
		'Htn' => $Htn,
		'cvsAngina' => $cvsAngina,
		'cvsMi' => $cvsMi,
		'cvsNyha' => $cvsNyha,
		'cvsPacemaker' => $cvsPacemaker,
		'respAsthma' => $respAsthma,
		'respSmoking' => $respSmoking,
		'respcough' => $respcough,
		'respSnoring' => $respSnoring,
		'reSputum' => $reSputum,
		'cnsStroke' => $cnsStroke,
		'cnsePilesy' => $cnsePilesy,
		'cnsSurgery' => $cnsSurgery,
		'cnsCognitive' => $cnsCognitive,
		'renalStones' => $renalStones,
		'renalUti' => $renalUti,
		'renalFailure' => $renalFailure,
		'diabetes' => $diabetes,
		'hepaticJaundice' => $hepaticJaundice,
		'hepaticReflux' => $hepaticReflux,
		'thyroid' => $thyroid,
		'steroid' => $steroid,
		'frality' => $frality,
		'anaesthetichistory' => $anaesthetichistory,
		'physicalExam' => $physicalExam,
		'covid' => $covid
	  );
	  // $data = $pationinfo->getOriginal();
	  $now = \Carbon\Carbon::now();	
	  $curent_date =  $now->format('Y-m-d');
	  view()->share('patients',$data);
		
		  $pdf = PDF::loadView('pdfView', $data);
		  $pathtosaved = public_path().'/pdf/patientID' . $patientID . '/';
		  File::makeDirectory($pathtosaved, $mode = 0777, true, true);
		  $filename = 'patient_report_' . $curent_date . '.pdf';
		  $path = $pathtosaved . $filename ;
		  $sendpathtoDownload = url('/').'/pdf/patientID' . $patientID . '/' .$filename ;
		  $pdf->save($path);	  
		  // download PDF file with download method
		  $MakeArr = array('path' => $sendpathtoDownload);
		  return json_encode($MakeArr);
		  return $pdf->download('pdf_file.pdf');

	}
 
 
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\patientInformation;
use App\Models\Laboratorydata;
use App\Models\cvsHtn;
use App\Models\cvsMi;
use App\Models\cvsAngina;
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
	  $cvsMi = cvsMi::where('patientNo', $patientID)->first();
	  $data = array(
		'pationinfo' => $pationinfo,
		'Laboratorydata' => $Laboratorydata,
		'Htn' => $Htn,
		'cvsAngina' => $cvsAngina,
		'cvsMi' => $cvsMi,
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

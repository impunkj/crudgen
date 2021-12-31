<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRE ANESTHESIA CHECKUP</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <style>
        *{font-family: 'Roboto', sans-serif;}
        .content{max-width:700px; margin:0 auto;}
        .content i{font-style: normal!important;}
        table{border-collapse: collapse; width:100%}
        table td{vertical-align: top; padidng:0px 10px !important; font-size: 11px !important;}
        table td span{font-size: 11px !important; font-weight: 500;}
        table tr th{font-size: 13px !important; border: 1px solid #ddd; font-weight: 500 !important; background-color: #fff !important; border-bottom: none;}
    </style>
</head>
<body>
    <div class="content">

<table >
@if($pationinfo)
    <tr>
        <td style="width: 33%;">
            <h2 style="margin-top: 0; margin-bottom: 10px; font-size: 15px !important; font-weight: 500;     color: #000;"> D. JJ Medical </h2>
            <p style="color: #444; margin-bottom: 6px; margin-top:  1px; font-size: 12px;"> Avvaiyar Street, Near Ekkaduthangal <br> Bus Stop, Ekkaduthangal 110016</p>
            <p style="color: #444;  margin-bottom: 6px; margin-top:  1px;     font-size: 12px;"> <strong style="color: #000;"> Email : </strong> udaihospital@gmail.com </p>
        </td>

        <td style="vertical-align: top; text-align: left; width: 33%;">
            <h1 style="margin-top: 0;margin-bottom: 5px; color: #000; font-size: 15px!important;font-weight: 500; "> PRE ANAESTHETIC CHECKUP </h1>
            <!-- <img style="width: 25%;" src="./logo.jpg" alt=""> -->
            <p style="color:#444; font-size:14px;  padding: 2px 10px 0px 0; margin-top: 0; margin-bottom: 0;"> Hospital Name :  <span style="color: #000; font-size:16px;"> {{ $pationinfo->hospitalName }} </span> </p>
            <p style="color:#444; font-size:14px; display: inline-block; float: left; padding: 2px 10px 0px 0; margin-top: 0; margin-bottom: 0"> Date : <span style="color: #000; font-size:16px;"> {{ \Carbon\Carbon::parse($pationinfo->dateOfBirth)->format('d/m/Y') }}
 </span> </p>
            <p style="color:#444; font-size:14px; display: inline-block; padding: 2px 10px 0px 0; margin-top: 0; margin-bottom: 0"> Time  : <span style="color: #000; font-size:16px;"> {{ \Carbon\Carbon::parse($pationinfo->timeOfAdmission)->format('H:i:s') }}  </span> </p>
            <p style="color:#444; font-size:14px;  padding: 2px 10px 0px 0; margin-top: 0; margin-bottom: 0"> Pincode : <span style="color: #000; font-size:16px;"> {{ $pationinfo->pincode }} </span> </p>
        </td>

        <td style="text-align: right; width: 33%;">
            <img style="width: 40%;" src="./photograph.jpg" alt="">
        </td>
    </tr>
@endif
</table>
@if($pationinfo)
<!-- Patient Information start -->
<table >
    <tr>
        <th   style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 1px 10px; width: 20%;"> PATIENT INFORMATION </th>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 24%;"> Name : <span style="color: #000; font-size:16px;"> {{ $pationinfo->name }}  </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  width: 16%;"> Age  : <span style="color: #000; font-size:16px;"> {{ $pationinfo->age }}  </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  width: 17%;"> DOB :<span style="color: #000; font-size:16px;"> {{ $pationinfo->dateOfBirth }}  </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Sex :<span style="color: #000; font-size:16px;">{{ $pationinfo->gender }} </span> </td>
    </tr>
    <tr>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width:32%;"> Reg. No : <span style="color: #000; font-size:16px;"> {{ $pationinfo->registerNumber }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Weight (kg) :  <span style="color: #000; font-size:16px;"> {{ $pationinfo->weight }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Height :  <span style="color: #000; font-size:16px;"> {{ $pationinfo->height }}</span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> BMI : <span style="color: #000; font-size:16px;"> {{ $pationinfo->BMI }} </span> </td>

    </tr>

    <tr>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> ASA Physical Status : <span style="color: #000; font-size:16px;"> {{ $pationinfo->ASAPhysicalStatus }}  </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> BP  : <span style="color: #000; font-size:16px;"> {{ $pationinfo->BP }}  </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> HR : <span style="color: #000; font-size:16px;"> {{ $pationinfo->HR }}  </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> SaO2 : <span style="color: #000; font-size:16px;"> {{ $pationinfo->sao2 }}  </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Side  : <span style="color: #000; font-size:16px;"> {{ $pationinfo->side }}  </span> </td>


    </tr>

   <!--  <tr>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Hospital Name : <span style="color: #000; font-size:16px;"> Udai Hospital </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Date : <span style="color: #000; font-size:16px;"> 10/11/2021 </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Time : <span style="color: #000; font-size:16px;"> 11:30am </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Pincode  :<span style="color: #000; font-size:16px;">110016 </span> </td>
    </tr> -->

    <tr>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Proposed Operation : <span style="color: #000; font-size:16px;">  {{ $pationinfo->proposedOperation }}  </span> </td>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Pre-Operative Diagnosis : <span style="color: #000; font-size:16px;"> </span>{{ $pationinfo->preOperativeDiagnosis }}  </td>
    </tr>

    <tr>
        <td colspan="5" style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> Allergies : {{ $pationinfo->allergies }} <span style="color: #000; font-size:16px;">   </span> </td>
    </tr>


</table>
@endif
<!-- Patient Information end -->

<!-- Labortaory Data start -->
@if($Laboratorydata)
<table >
    <tr>
        <th  style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 1px 10px; width: 22%;"> LABORATORY DATA </th>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Hb : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->Hb }}</span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> WBC : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->WBC }}</span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Platelets : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->Platelets }}</span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> PCV : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->Pcv }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> LDH : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->Ldh }} </span> </td>



    </tr>
    <tr>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Urea : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->Urea }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Creatine : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->Creatine }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Na : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->Na }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> K : <span style="color: #000; font-size:16px;">{{ $Laboratorydata->K }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Ca : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->Ca }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Mg : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->Mg }} </span> </td>
    </tr>

    <tr>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 16%;"> Total Bil : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->totalBill }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 16%;"> Dir. Bil : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->dirBill }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 16%;"> Alk Phos : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->alkPhos }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 16%;"> SGOT  : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->sgot }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 16%;"> SGPT : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->sgpt }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Alb : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->Alb }} </span> </td>
    </tr>

    <tr>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> RBS : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->Rbs }} </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> PPBS : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->Ppbs }} </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;">HbA1c : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->Hba }} </span> </td>
    </tr>

    <tr>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> HIV : <span style="color: #000; font-size:16px;"> @if($Laboratorydata->hiv == 1)+ve @endif  @if($Laboratorydata->hiv == 0)-ve @endif </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> HBS Ag : <span style="color: #000; font-size:16px;">@if($Laboratorydata->hbsag == 1)+ve @endif  @if($Laboratorydata->hbsag == 0)-ve @endif </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> HCV : <span style="color: #000; font-size:16px;"> @if($Laboratorydata->hcv == 1)+ve @endif  @if($Laboratorydata->hcv == 0)-ve @endif</span> </td>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;">RTPCR : <span style="color: #000; font-size:16px;"> @if($Laboratorydata->rtpcr == 1)+ve @endif  @if($Laboratorydata->rtpcr == 0)-ve @endif</span> </td>
    </tr>

    <tr>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> ECG : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->Ecg }} </span> </td>
        <td colspan="5" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Cardiac echo  : <span style="color: #000; font-size:16px;">  {{ $Laboratorydata->cardiacEcho }} </span> </td>

    </tr>

    <tr>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Protein : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->Protein }} </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> APTT : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->APTT }}  </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> PT : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->PT }} </span> </td>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> INR : <span style="color: #000; font-size:16px;">{{ $Laboratorydata->INR }} </span> </td>
    </tr>



    <tr>

        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Other : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->other1 }}  </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Other : <span style="color: #000; font-size:16px;">  {{ $Laboratorydata->other2 }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Other : <span style="color: #000; font-size:16px;">  {{ $Laboratorydata->other3 }} </span> </td>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Other : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->other4 }}  </span> </td>

    </tr>

    <tr>

        <td colspan="4" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Chest X-Ray : <span style="color: #000; font-size:16px;">  {{ $Laboratorydata->ChestXray }} </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Other  : <span style="color: #000; font-size:16px;"> {{ $Laboratorydata->Other }}  </span> </td>
    </tr>


</table>
@endif
<!-- Laboratory data end -->


<!-- CVS start -->
<table>
@if($Htn)
    <tr>
        <th  style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 1px 10px;"> CVS : HTN</th>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> How long : <span style="color: #000; font-size:16px; "> @if($Htn->hlyy) {{ $Htn->hlyy }} years @endif @if($Htn->hlmm) {{ $Htn->hlmm }} Month @endif @if($Htn->hldd) {{ $Htn->hldd }} Days @endif</span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Stress/Angio : <span style="color: #000; font-size:16px;">@if($Htn->hlyy == 2) No @endif </span> </td>
    </tr>
	<tr>
      <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Treatment : <span style="color: #000; font-size:16px;"> {{ $Htn->treatment }} </span> </td>
      <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Advisory : <span style="color: #000; font-size:16px;"> {{ $Htn->treatment }}  </span> </td>
    </tr>
@endif
@if($cvsAngina)
    <tr>
        <th  style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Angina </i> </th>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Status : <span style="color: #000; font-size:16px;"> {{ $cvsAngina->status  }} </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Taking treatment : <span style="color: #000; font-size:16px;"> @if($cvsAngina->takingTreatment == 1){ Yes }  @endif</span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Duration of treatment? : <span style="color: #000; font-size:16px;"> {{ $cvsAngina->dtyy  }} years, @if($cvsAngina->dtmm) {{ $cvsAngina->dtmm  }} month @endif,  @if($cvsAngina->dtdd){{ $cvsAngina->dtdd  }} day @endif</span> </td>
    </tr>

    <tr>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> What causes Angina? : <span style="color: #000; font-size:16px;"> {{  $cvsAngina->causeAngina }}</span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> How it stops? : <span style="color: #000; font-size:16px;"> {{  $cvsAngina->howItStop }}</span> </td>
    </tr>
@endif
@if($cvsMi)
    <tr>
        <th  style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px; width: 24%;"> <i> MI </i> </th>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> When : <span style="color: #000; font-size:16px;">  @if($cvsMi->whyy) {{ $cvsMi->whyy }} years @endif  @if($cvsMi->whmm) {{ $cvsMi->whmm }} month @endif @if($cvsMi->whdd) {{ $cvsMi->whdd }} Days @endif</span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Medical : <span style="color: #000; font-size:16px;"> {{ $cvsMi->medical }} </span> </td>
        <td  colspan="1" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Stented : <span style="color: #000; font-size:16px;"> {{ $cvsMi->stented }} </span> </td>
    </tr>


    <tr>
         <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Treatment : <span style="color: #000; font-size:16px;"> { $cvsMi->treatMent }}  </span> </td>
         <td  colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Advisory : <span style="color: #000; font-size:16px;"> { $cvsMi->stented }} </span> </td>
    </tr>

    <tr>
	@if($cvsNyha)
        <th   style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> NYHA </i>: <span style=" color: #444; font-size: 14px;  font-weight: 400;"> Class  {{ $cvsNyha->Nclass }} (Mild) </span> </th>
	@endif 
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> When : <span style="color: #000; font-size:16px;"> 19 years </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Stopped Antiplatelet : <span style="color: #000; font-size:16px;"> No </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Antiplatelet : <span style="color: #000; font-size:16px;"> {{ json_decode($cvsMi->whatTreatment)->antiplatelet }}  </span> </td>
    </tr>

    <tr>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; ">  Antianginals : <span style="color: #000; font-size:16px;"> {{ json_decode($cvsMi->whatTreatment)->antianginals }}   </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Statins : <span style="color: #000; font-size:16px;">  {{ json_decode($cvsMi->whatTreatment)->statins }}  </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Anticoagulant : <span style="color: #000; font-size:16px;"> {{ json_decode($cvsMi->whatTreatment)->anticoagulant }}  </span> </td>
        </tr>

    <tr>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> What Treatment : <span style="color: #000; font-size:16px;"> {{ json_decode($cvsMi->whatTreatment)->whatTreatment }}   </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Other : <span style="color: #000; font-size:16px;">  {{ json_decode($cvsMi->whatTreatment)->other }}  </span> </td>
    </tr>

    <tr>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Symptoms Improved : <span style="color: #000; font-size:16px;"> {{ $cvsMi->symptomsImproved }} </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> CABG : <span style="color: #000; font-size:16px;"> {{ $cvsMi->cabg }} </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> When : <span style="color: #000; font-size:16px;"> @if($cvsMi->twhyy) {{ $cvsMi->twhyy }} years @endif  @if($cvsMi->twhmm) {{ $cvsMi->whmm }} month @endif @if($cvsMi->whdd) {{ $cvsMi->whdd }} Days @endif </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; ">  Symptoms improved : <span style="color: #000; font-size:16px;"> {{ $cvsMi->symptomsImproved }}  </span> </td>
    </tr>

    <tr>

        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Both Stented and CABG : <span style="color: #000; font-size:16px;"> {{ $cvsMi->BStentedCABG }}   </span> </td>
          <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Type of Graft : <span style="color: #000; font-size:16px;">  {{ $cvsMi->typeofGraft }}  </span> </td>
          <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Repeat CAG : <span style="color: #000; font-size:16px;"> {{ $cvsMi->repeatCag }}   </span> </td>
        </tr>
@endif
 <!--    <tr>
        <th colspan="4"  style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> NYHA </i>: <span style=" color: #444; font-size: 14px;  font-weight: 400;"> Class I (Mild) </span> </th>
    </tr> -->

@if($cvsPacemaker)
    <tr>
        <th   style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Pacemaker </i> </th>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Why : <span style="color: #000; font-size:16px;">  {{ $cvsPacemaker->why }} </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Pacemaker make / Type? : <span style="color: #000; font-size:16px;">  {{ $cvsPacemaker->pacemakerType  }} </span> </td>
    </tr>
    <tr>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> When  : <span style="color: #000; font-size:16px;"> @if($cvsPacemaker->whyy) {{ $cvsPacemaker->whyy }} @endif @if($cvsPacemaker->whmm) {{ $cvsPacemaker->whmm }} @endif @if($cvsPacemaker->whdd) {{ $cvsPacemaker->whdd }} @endif  </span> </td>
        
		<td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Check paperwork / Card / Chest xRay <span style="color: #000; font-size:16px;">  if($cvsPacemaker->ckpaperwork == 1) { YES  } </span> </td>
        </tr>
@endif

</table>
<!-- CVS end -->


<!-- RESP start -->
<table>
@if($respAsthma)
    <tr>
        <th  style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 1px 10px;"> RESP : Asthma </th>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;    "> What causes : <span style="color: #000; font-size:16px;"> {{ $respAsthma->whatCause }} </span> </td>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Treatment : <span style="color: #000; font-size:16px;">  {{ $respAsthma->treatment }}   </span> </td>
    </tr>
@endif
@if($cvsPacemaker)
    <tr>
        <td    style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;     "> How long : <span style="color: #000; font-size:16px;"> @if($cvsPacemaker->hlyy) {{ $cvsPacemaker->hlyy }} @endif @if($cvsPacemaker->hlmm) {{ $cvsPacemaker->hlmm }} @endif @if($cvsPacemaker->hldd) {{ $cvsPacemaker->hldd }} @endif  </span> </td>
        <td  colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> When did the last attack occur : <span style="color: #000; font-size:16px;"> @if($cvsPacemaker->whyy) {{ $cvsPacemaker->whyy }} @endif @if($cvsPacemaker->whmm) {{ $cvsPacemaker->whmm }} @endif @if($cvsPacemaker->whdd) {{ $cvsPacemaker->whdd }} @endif   </span> </td>
        <td  colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> How was it treated? : <span style="color: #000; font-size:16px;">{{ $cvsPacemaker->howDoyouTreat }}  </span> </td>

    </tr>

    <tr>
        <td  colspan="3"   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> URTI LRTI Present : <span style="color: #000; font-size:16px;"> {{ $cvsPacemaker->urti }} </span> </td>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Advisory : <span style="color: #000; font-size:16px;"> {{ $cvsPacemaker->advised }}  </span> </td>
        </tr>

	@endif
	@if($respSmoking)
    <tr>
        <th  style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px; width: 18%;"> <i> Smoking </i> </th>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> How Many : <span style="color: #000; font-size:16px;"> {{ $respSmoking->howmany }}   </span> </td>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> How Long : <span style="color: #000; font-size:16px;"> @if($respSmoking->hlyy) {{ $respSmoking->hlyy }} @endif @if($respSmoking->hlmm) {{ $respSmoking->hlmm }} @endif @if($respSmoking->hldd) {{ $respSmoking->hldd }} @endif   </span> </td>
        <td  colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> When did you stop it : <span style="color: #000; font-size:16px;">  {{ $respSmoking->whenStop }} </span> </td>
    </tr>
@endif
@if($respSnoring)
    <tr>
        <th style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Snoring </i> </th>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Stop BANG Score : <span style="color: #000; font-size:16px;"> {{ $respSnoring->stopBangScore }} </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Sleep Study : <span style="color: #000; font-size:16px;"> {{ $respSnoring->sleepStudy }}   </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> CPAP : <span style="color: #000; font-size:16px;"> {{ $respSnoring->cpap }} </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> OSA : <span style="color: #000; font-size:16px;"> {{ $respSnoring->OSAW }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Fall asleep in the daytime : <span style="color: #000; font-size:16px;"> {{ $respSnoring->duFSleep }}  </span> </td>
    </tr>
@endif
   <!--  <tr>
        <td colspan="5" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Do you fall asleep in the daytime : <span style="color: #000; font-size:16px;"> No  </span> </td>
        </tr> -->
@if($respcough)
    <tr>
        <th  style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Cough </i> </th>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> How Long : <span style="color: #000; font-size:16px;"> @if($respcough->hlyy) {{ $respcough->hlyy }} @endif @if($respcough->hlmm) {{ $respcough->hlmm }} @endif @if($respcough->hldd) {{ $respcough->hldd }} @endif   </span> </td>
        <td colspan="3"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> What Cause : <span style="color: #000; font-size:16px;"> {{ $respcough->cause }}  </span> </td>
    </tr>
@endif
@if($reSputum)
    <tr>
        <th   style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Sputum </i> </th>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> How Long : <span style="color: #000; font-size:16px;"> @if($reSputum->hlyy) {{ $reSputum->hlyy }} @endif @if($reSputum->hlmm) {{ $reSputum->hlmm }} @endif @if($reSputum->hldd) {{ $reSputum->hldd }} @endif  </span> </td>
        <td colspan="3"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Color : <span style="color: #000; font-size:16px;"> {{ $reSputum->color }} </span> </td>
    </tr>

    <tr>
        <td colspan="3"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> What treatment : <span style="color: #000; font-size:16px;"> {{ $reSputum->treatment }}   </span> </td>
        <td colspan="3"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> How Long : <span style="color: #000; font-size:16px;"> @if($reSputum->thlyy) {{ $reSputum->thlyy }} @endif @if($reSputum->thlmm) {{ $reSputum->thlmm }} @endif @if($reSputum->thldd) {{ $reSputum->thldd }} @endif   </span> </td>
    </tr>
@endif
</table>

<!-- RESP end -->



<!-- CNS start -->
<table >
@if($cnsStroke)
    <tr>
        <th  style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 1px 10px;"> CNS : Stroke </th>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> When : <span style="color: #000; font-size:16px;"> @if($cnsStroke->whyy) {{ $cnsStroke->whyy }} @endif @if($cnsStroke->whmm) {{ $cnsStroke->whmm }} @endif @if($cnsStroke->whdd) {{ $cnsStroke->whdd }} @endif </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Present status : <span style="color: #000; font-size:16px;"> {{ $cnsStroke->pStatus }}   </span> </td>
    </tr>

    <tr>
        <td colspan="5" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> What treatment : <span style="color: #000; font-size:16px;"> {{ $cnsStroke->treatment }} </span> </td>
    </tr>
@endif
@if($cnsePilesy)
    <tr>
        <th style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Epilesy </i> </th>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> How long : <span style="color: #000; font-size:16px;"> @if($cnsePilesy->hlyy) {{ $cnsePilesy->hlyy }} Years @endif @if($cnsePilesy->hlmm) {{ $cnsePilesy->hlmm }} Month @endif @if($cnsePilesy->hldd) {{ $cnsePilesy->hldd }} Days @endif </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Last seizure : <span style="color: #000; font-size:16px;"> @if($cnsePilesy->lsyy) {{ $cnsePilesy->lsyy }} Years @endif @if($cnsePilesy->lsmm) {{ $cnsePilesy->lsmm }} Month @endif @if($cnsePilesy->lsdd) {{ $cnsePilesy->lsdd }} Days @endif  </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Medication : <span style="color: #000; font-size:16px;"> {{ $cnsePilesy->medication }} </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Advisory<span style="color: #000; font-size:16px;"> {{ $cnsePilesy->Neurologyconsult }} </span> </td>
    </tr>
@endif
@if($cnsSurgery)
    <tr>
        <th  style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Surgery (Brain) </i> </th>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> What surgery?  <span style="color: #000; font-size:16px;">  {{ $cnsSurgery->brainwSurgery }}  </span> </td>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Residual effect <span style="color: #000; font-size:16px;">  {{ $cnsSurgery->brainREffect }}   </span> </td>
    </tr>

    <tr>
        <th  style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> Spinal Cord </th>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> What surgery?  <span style="color: #000; font-size:16px;"> {{ $cnsSurgery->spinalwSurgery }}  </span> </td>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Residual effect <span style="color: #000; font-size:16px;"> {{ $cnsSurgery->spinalREffect }}   </span> </td>
    </tr>
@endif
@if($cnsCognitive)
    <tr>
        <th  style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Cognitive Impairment </i> </th>
        <td  colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Mini-Cog Score :  <span style="color: #000; font-size:16px;"> {{ $cnsCognitive->MiniCogScore }}   </span> </td>
        <td  colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Give the patient 3 tries to repeat the words : <span style="color: #000; font-size:16px;">   </span> </td>
    </tr>
@endif

    <tr>
         <td colspan="5"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> If subject has not finished clock drawing in 3 minutes : <span style="color: #000; font-size:16px;">   </span> </td>
        </tr>

</table>
<!-- CNS end -->



<!-- RENL start -->
<table>
@if($renalStones)
    <tr>
        <th  style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 1px 10px; width: 20%;"> RENAL : Stones </th>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Surgery needed : <span style="color: #000; font-size:16px;"> {{ $renalStones->SurgeryNeeded }}  </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Status : <span style="color: #000; font-size:16px;"> {{ $renalStones->status }}   </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> What surgery : <span style="color: #000; font-size:16px;">  {{ $renalStones->whatSurgery }}  </span> </td>
    </tr>
@endif

    <tr>
        <td colspan="4" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> What surgery : <span style="color: #000; font-size:16px;">  </span> </td>
    </tr>
@if($renalFailure)
    <tr>
        <th style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Failure </i> </th>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Urea : <span style="color: #000; font-size:16px;">  {{ $renalFailure->urea }}   </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Creatinine : <span style="color: #000; font-size:16px;"> {{ $renalFailure->creatinine }}   </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> eGFR : <span style="color: #000; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <th style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> Hemo </th>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Frequency : <span style="color: #000; font-size:16px;"> {{ $renalFailure->hemo }}   </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; ">   <span style="color: #000; font-size:16px;">   {{ $renalFailure->hemoValue }}   </span> </td>
    </tr>

    <tr>
        <th  style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> Peritoneal </th>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Frequency : <span style="color: #000; font-size:16px;"> {{ $renalFailure->peritoneal }} </span> </td>
        <td  colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Fisual  <span style="color: #000; font-size:16px;">  {{ $renalFailure->peritonealValue }}  </span> </td>
    </tr>
	@endif
@if($renalUti)
    <tr>
        <th  style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> UTI </i> </th>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> When : <span style="color: #000; font-size:16px;"> @if($renalUti->whyy) {{ $renalUti->whyy }} Years @endif @if($renalUti->whmm) {{ $renalUti->whmm }} Month @endif @if($renalUti->whdd) {{ $renalUti->whdd }} Days @endif  </span> </td>
    </tr>


    <tr>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;">   CUE : <span style="color: #000; font-size:16px;"> {{ $renalUti->cue }}   </span> </td>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> What drugs   <span style="color: #000; font-size:16px;">   {{ $renalUti->whatdrugs }}  </span> </td>
    </tr>
@endif
</table>
<!-- RENL end -->



<!-- Diabetes start -->
<table>
@if($diabetes)
    <tr>
        <th style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 1px 10px;"> Diabetes </th>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Rx : <span style="color: #000; font-size:16px;"> @if($diabetes) Yes @endif </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> How much ? : <span style="color: #000; font-size:16px;"> {{ $diabetes->howmuch }}  </span> </td>
    </tr>


    <tr>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Rx : <span style="color: #000; font-size:16px;"> {{ $diabetes->rxtreat }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> How much ? : <span style="color: #000; font-size:16px;">  {{ $diabetes->howmuch }}   </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 50%;"> What treatment : <span style="color: #000; font-size:16px;"> {{ $diabetes->whatTreatment }}  </span> </td>
    </tr>



    <tr>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Complications : <span style="color: #000; font-size:16px;">  {{ $diabetes->complications }}  </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Diet : <span style="color: #000; font-size:16px;"> {{ $diabetes->dietcontrol }}  </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Sugar check at home : <span style="color: #000; font-size:16px;"> {{ $diabetes->sugarCheckHome }}   </span> </td>
    </tr>
@endif
</table>
<!-- Diabetes end -->




<!-- Hepatic/GE start -->
<table>
@if($hepaticJaundice)
    <tr>
        <th  style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 1px 10px;"> Hepatic/GE : Jaundice </th>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> When : <span style="color: #000; font-size:16px;"> @if($hepaticJaundice->whyy) {{ $hepaticJaundice->whyy }} Years @endif @if($hepaticJaundice->whmm) {{ $hepaticJaundice->whmm }} Month @endif @if($hepaticJaundice->whdd) {{ $hepaticJaundice->whdd }} Days @endif  </span> </td>
    </tr>

    <tr>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Cause : <span style="color: #000; font-size:16px;">  {{ $hepaticJaundice->cause }} </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Viral status : <span style="color: #000; font-size:16px;">  {{ $hepaticJaundice->viralStatus }}  </span> </td>
    </tr>

    <tr>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 40.5%;"> Child criteria : <span style="color: #000; font-size:16px;">  {{ $hepaticJaundice->childCriteria }}  </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 50%;"> I.N.R   : <span style="color: #000; font-size:16px;"> {{ $hepaticJaundice->INR }} </span> </td>
    </tr>
	@endif
	@if($hepaticReflux)
    <tr>
        <th colspan="2" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Reflux </i>: <span style=" color: #444; font-size: 14px;  font-weight: 400;"> "Prescribe H2 / PPI / Metoclopramide Warning Rapid Sequence No LMA." </span> </th>

    </tr>
	@endif
</table>
<!-- Hepatic/GE end -->



<!-- Thyroid start -->
<table>
    <tr>
        <th colspan="2"  style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 1px 10px; width: 25%;"> Other : Thyroid </th>
        <td  colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;">  <span style="color: #000; font-size:16px;"> @if($thyroid){{ $thyroid->typeOf }} @endif </span> </td>
    </tr>

    <tr>
        <td colspan="4"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> What treatment : <span style="color: #000; font-size:16px;">  @if($thyroid){{ $thyroid->whatTreatment }} @endif   </span> </td>
    </tr>

    <tr>
        <th style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px; width: 25%;"> <i> Fraility </i> </th>
       <!--  <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 23%;"> Supplement steroid : <span style="color: #000; font-size:16px;">   </span> </td> -->
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 30%;">Steroid intake in last 6 months : <span style="color: #000; font-size:16px;">  @if($steroid) {{ $steroid->sterioid }} @endif   </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Supplement Steroid pre-op : <span style="color: #000; font-size:16px;">  @if($steroid) {{ $steroid->Ssteroid }} @endif   </span> </td>
    </tr>

    <tr>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Cognition : <span style="color: #000; font-size:16px;">  Other Errors </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> General health status : <span style="color: #000; font-size:16px;"> @if($steroid) {{ $steroid->ghstatus }} @endif    </span> </td>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> How would you describe your health? : <span style="color: #000; font-size:16px;"> @if($steroid) {{ $steroid->describehealth }} @endif    </span> </td>
    </tr>

    <tr>
        <td  colspan="1" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Functional independence : <span style="color: #000; font-size:16px;">  @if($steroid) {{ $steroid->findependence }} @endif </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Social support : <span style="color: #000; font-size:16px;">  @if($steroid) {{ $steroid->socialSupport }} @endif  </span> </td>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Medication use : <span style="color: #000; font-size:16px;">  @if($steroid) {{ $steroid->medicationusefive }} @endif     </span> </td>
    </tr>

    <tr>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Nutrition : <span style="color: #000; font-size:16px;"> @if($steroid) {{ $steroid->Nutrition }} @endif </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Mood : <span style="color: #000; font-size:16px;"> @if($steroid) {{ $steroid->Mood }} @endif   </span> </td>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Continence : <span style="color: #000; font-size:16px;">  @if($steroid) {{ $steroid->Continence }} @endif    </span> </td>
    </tr>

    <tr>
        <td  colspan="4" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Functional performance : <span style="color: #000; font-size:16px;">   One of @if($steroid) {{ $steroid->Functionalperformance }} @endif   s,or patient unwilling ,or requires assistance  </span> </td>
    </tr>

</table>
<!-- Thyroid end -->




<!-- Anaesthetic  start -->
<table >
    <tr>
        <th style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 1px 10px;"> Anaesthetic : History </th>
        <td colspan="4" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Past Anaesthetic History : <span style="color: #000; font-size:16px;"> @if($anaesthetichistory){{ $anaesthetichistory->preAnaesthHistory }} @endif  </span> </td>
    </tr>

    <tr>
        <th style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px; width: 22%;"> <i> Physical Exam </i> </th>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;">
           <span>
            <b style="color: #000;"> Airway : </b> <span style="color: #000; font-size:16px;"> @if($physicalExam) {{  $physicalExam->airway }}  @endif  </span>
        </span>
            <span style="color:#444; font-size:14px; border-left: 1px solid #ddd; width: 17%; padding-left:10px; margin-left: 65px;"> MP :  <span style="color: #000; font-size:16px; ">  @if($physicalExam) {{  $physicalExam->mp }}  @endif  </span> </span>
        </td>

        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Mouth Opening : <span style="color: #000; font-size:16px;"> @if($physicalExam) {{  $physicalExam->mouthOpening }}  @endif  </span> </td>
        <td  colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Mentohyoid Distance : <span style="color: #000; font-size:16px;"> @if($physicalExam) {{  $physicalExam->mentohyoidDistance }}  @endif  </span> </td>
    </tr>

 <!--    <tr>
           <td  colspan="5"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Mentohyoid Distance : <span style="color: #000; font-size:16px;">   </span> </td>
        </tr> -->

    <tr>
        <th colspan="2" style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> Neck </th>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> @if($physicalExam) {{  $physicalExam->neck }}  @endif Expanded : <span style="color: #000; font-size:16px;">  </span> </td>
    </tr>

    <tr>
        <th style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> Teeth </th>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; ">   <span style="color: #000; font-size:16px;"> Loose :</span> "Dental Protection Needed" </td>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> <span style="color: #000; font-size:16px;"> Denture : </span> Removable</td>
    </tr>

    <tr>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; ">  Lungs :<span style="color: #000; font-size:16px;">  @if($physicalExam) {{  $physicalExam->lungs }}  @endif </span> </td>
        <td  colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Heart :<span style="color: #000; font-size:16px;"> @if($physicalExam) {{  $physicalExam->heart }}  @endif   </span> </td>
    </tr>

    <tr>
        <td colspan="5" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; ">  CNS :<span style="color: #000; font-size:16px;"> @if($physicalExam) {{  $physicalExam->cns }}  @endif   </span> </td>
    </tr>

    <tr>
        <th  style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> Pupils </th>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width:28%;">  <span style="color: #000; font-size:16px;"> Equal  </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Right :<span style="color: #000; font-size:16px;"> @if($physicalExam) {{ json_decode($physicalExam->pupils)->right }} @endif </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Left :<span style="color: #000; font-size:16px;"> @if($physicalExam) {{ json_decode($physicalExam->pupils)->left }} @endif   </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> E : @if($physicalExam) {{ $physicalExam->e }} @endif  <span style="color: #000; font-size:16px;">  </span> V :  @if($physicalExam) {{ $physicalExam->v }} @endif  <span style="color: #000; font-size:16px;">  </span> M :  @if($physicalExam) {{ $physicalExam->m }} @endif  <span style="color: #000; font-size:16px;">  </span></td>
    </tr>


    <tr>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> E : <span style="color: #000; font-size:16px;">  </span> V : <span style="color: #000; font-size:16px;">  </span> M : <span style="color: #000; font-size:16px;">  </span></td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Other : <span style="color: #000; font-size:16px;">  @if($physicalExam) {{ $physicalExam->other }} @endif   </span> </td>
        <td colspan="3"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Venous access site : <span style="color: #000; font-size:16px;"> @if($physicalExam) {{ $physicalExam->venous }} @endif  </span> </td>

    </tr>

    <tr>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Spine exam for regional : <span style="color: #000; font-size:16px;"> @if($physicalExam) {{ $physicalExam->spineExam }} @endif     </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Anaesthesia Plan : <span style="color: #000; font-size:16px;"> @if($physicalExam) {{ $physicalExam->anaesthesiaPlan }} @endif </span> </td>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Proposed Post-op Pain relief : <span style="color: #000; font-size:16px;"> @if($physicalExam) {{ $physicalExam->proposedPost }} @endif   </span> </td>

    </tr>

    <tr>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Peri-op plan explained to patient : <span style="color: #000; font-size:16px;"> @if($physicalExam) {{ $physicalExam->PeriPop }} @endif   </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Will take blood : <span style="color: #000; font-size:16px;"> @if($physicalExam) {{ $physicalExam->willtakeBlood }} @endif   </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; ">  <span style="color: #000; font-size:16px;"> Pregnant :</span> @if($physicalExam) {{ $physicalExam->pregnant }} @endif  </td>
    </tr>

    <tr>
        <td  colspan="5"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Current medications : <span style="color: #000; font-size:16px;">  @if($physicalExam) {{ $physicalExam->currentmedications }} @endif  </span> </td>
    </tr>
</table>
<!-- Anaesthetic  end -->




<!-- Extra Note start -->
<table >
    <tr>
        <th style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 1px 10px; border-bottom: 1px solid #ddd;"> Extra Notes :  </th>
    </tr>
</table>
<!-- Extra Note end -->



<!-- COVID Section start -->
<table>
    <tr>
        <th  style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px; width: 15%;"> Covid </th>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px; width: 24%;"> When :  <span style="color: #000; font-size:16px;"> @if($covid) {{ $covid->whyy }} Years @endif @if($covid) {{ $covid->whmm }} Month @endif @if($covid) {{ $covid->whdd }} Days @endif  </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px; width: 17%;"> Where :  <span style="color: #000; font-size:16px;"> @if($covid) {{ $covid->wherePlace }} @endif  </span> </td>
        <td colspan="2"  style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> Treatment :  <span style="color: #000; font-size:16px;"> @if($covid)  {{ $covid->treatment }}  @endif    </span> </td>
		

    </tr>

    <tr>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> RESP :  <span style="color: #000; font-size:16px;"> @if($covid) {{ $covid->resp }} @endif   </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> CVS :  <span style="color: #000; font-size:16px;">    @if($covid) {{ $covid->cvs }} @endif   </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> RENL :  <span style="color: #000; font-size:16px;">  @if($covid)  @if($covid->renal == 1) Dialysis @else NO @endif  @endif  </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> Anticoagulants Fungal :  <span style="color: #000; font-size:16px;">  @if($covid) {{ $covid->anticoafungal }} @endif </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> Vaccinated :  <span style="color: #000; font-size:16px;">   @if($covid) {{ $covid->vaccinated }} @endif  </span> </td>
    </tr>


</table>
<!-- COVID Section End -->


<!-- Advisory Section start -->
<table>
    <tr>
        <th  style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px; width: 19%;"> Advisory </th>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> 1 : <span style="color: #000; font-size:16px;"> @if($cvsAngina) Cardiology Referral  @endif  </span> </td>cvsmi
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> 1 :   <span style="color: #000; font-size:16px;"> @if($cvsMi) @if($cvsMi->stoppedAntiplatelet == 'No') Stop anitplate & Cardiology consult @endif @endif  </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> 2 :  <span style="color: #000; font-size:16px;">  @if($cvsPacemaker) Check Paperwork, Chect X-ray, Cardiology Consult  @endif   </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> 3 :  <span style="color: #000; font-size:16px;"> @if($respAsthma) Physician Consult		@endif    </span> </td>

    </tr>

    <tr>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> 4 :  <span style="color: #000; font-size:16px;"> @if($respAsthma) Physician Consult		@endif  </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> 5 :  <span style="color: #000; font-size:16px;"> @if($cnsStroke) Neurology Consult		@endif  </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> 6 :  <span style="color: #000; font-size:16px;"> @if($cnsePilesy) Neurology Consult		@endif   </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> 7 :  <span style="color: #000; font-size:16px;"> @if($renalFailure) @if($renalFailure->dialysis == 1 ) Nephro Consult @endif @endif   @if($renalFailure) @if($renalFailure->fistual == 1 ) Protect Fistula @endif @endif   </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> 8 :  <span style="color: #000; font-size:16px;"> @if($diabetes) Physician Consult @endif   </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> 9 :  <span style="color: #000; font-size:16px;"> @if($hepaticReflux) Prescribe.... @endif   </span> </td>			

    </tr>
</table>
<!-- Advisory Section End -->


<!-- Signature Section Start -->
<table style="margin-top: 15px; border: none;">
    <tr>
        <th colspan="2" style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: none; padding: 1px 10px;"> Name  </th>


    </tr>

    <tr>
        <th  style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: none; padding: 1px 10px;"> Registration No.  </th>
        <th  style="text-align: right; font-size: 14px; font-weight: 500; color: #000; border: none; padding: 1px 10px;"> Signature </th>
    </tr>
</table>
<!-- Signature Section End -->

</div>

</body>
</html>



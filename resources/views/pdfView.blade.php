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
            <p style="color:#444; font-size:14px; display: inline-block; float: left; padding: 2px 10px 0px 0; margin-top: 0; margin-bottom: 0"> Date : <span style="color: #000; font-size:16px;"> {{ $pationinfo->dateOfBirth }}  </span> </p>
            <p style="color:#444; font-size:14px; display: inline-block; padding: 2px 10px 0px 0; margin-top: 0; margin-bottom: 0"> Time  : <span style="color: #000; font-size:16px;"> {{ $pationinfo->timeOfAdmission }}  </span> </p>
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
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Hb : <span style="color: #000; font-size:16px;"> {{ $pationinfo->Hb }}</span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> WBC : <span style="color: #000; font-size:16px;"> {{ $pationinfo->WBC }}</span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Platelets : <span style="color: #000; font-size:16px;"> {{ $pationinfo->Platelets }}</span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> PCV : <span style="color: #000; font-size:16px;"> {{ $pationinfo->Pcv }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> LDH : <span style="color: #000; font-size:16px;"> {{ $pationinfo->Ldh }} </span> </td>



    </tr>
    <tr>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Urea : <span style="color: #000; font-size:16px;"> {{ $pationinfo->Urea }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Creatine : <span style="color: #000; font-size:16px;"> {{ $pationinfo->Creatine }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Na : <span style="color: #000; font-size:16px;"> {{ $pationinfo->Na }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> K : <span style="color: #000; font-size:16px;">{{ $pationinfo->K }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Ca : <span style="color: #000; font-size:16px;"> {{ $pationinfo->Ca }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Mg : <span style="color: #000; font-size:16px;"> {{ $pationinfo->Mg }} </span> </td>
    </tr>

    <tr>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 16%;"> Total Bil : <span style="color: #000; font-size:16px;"> {{ $pationinfo->totalBill }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 16%;"> Dir. Bil : <span style="color: #000; font-size:16px;"> {{ $pationinfo->dirBill }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 16%;"> Alk Phos : <span style="color: #000; font-size:16px;"> {{ $pationinfo->alkPhos }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 16%;"> SGOT  : <span style="color: #000; font-size:16px;"> {{ $pationinfo->sgot }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 16%;"> SGPT : <span style="color: #000; font-size:16px;"> {{ $pationinfo->sgpt }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Alb : <span style="color: #000; font-size:16px;"> {{ $pationinfo->Alb }} </span> </td>
    </tr>

    <tr>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> RBS : <span style="color: #000; font-size:16px;"> {{ $pationinfo->Rbs }} </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> PPBS : <span style="color: #000; font-size:16px;"> {{ $pationinfo->Ppbs }} </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;">HbA1c : <span style="color: #000; font-size:16px;"> {{ $pationinfo->Hba }} </span> </td>
    </tr>

    <tr>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> HIV : <span style="color: #000; font-size:16px;"> if($pationinfo->hiv){ HIV } </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> HBS Ag : <span style="color: #000; font-size:16px;"> {{ $pationinfo->hbsag }} </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> HCV : <span style="color: #000; font-size:16px;"> {{ $pationinfo->hcv }} </span> </td>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;">RTPCR : <span style="color: #000; font-size:16px;"> {{ $pationinfo->rtpcr }} </span> </td>
    </tr>

    <tr>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> ECG : <span style="color: #000; font-size:16px;"> {{ $pationinfo->Ecg }} </span> </td>
        <td colspan="5" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Cardiac echo  : <span style="color: #000; font-size:16px;">  {{ $pationinfo->cardiacEcho }} </span> </td>

    </tr>

    <tr>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Protein : <span style="color: #000; font-size:16px;"> {{ $pationinfo->Protein }} </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> APTT : <span style="color: #000; font-size:16px;"> {{ $pationinfo->APTT }}  </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> PT : <span style="color: #000; font-size:16px;"> {{ $pationinfo->PT }} </span> </td>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> INR : <span style="color: #000; font-size:16px;">{{ $pationinfo->INR }} </span> </td>
    </tr>



    <tr>

        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Other : <span style="color: #000; font-size:16px;"> {{ $pationinfo->other1 }}  </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Other : <span style="color: #000; font-size:16px;">  {{ $pationinfo->other2 }} </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Other : <span style="color: #000; font-size:16px;">  {{ $pationinfo->other3 }} </span> </td>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Other : <span style="color: #000; font-size:16px;"> {{ $pationinfo->other4 }}  </span> </td>

    </tr>

    <tr>

        <td colspan="4" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Chest X-Ray : <span style="color: #000; font-size:16px;">  {{ $pationinfo->ChestXray }} </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Other  : <span style="color: #000; font-size:16px;"> {{ $pationinfo->Other }}  </span> </td>
    </tr>


</table>
@endif
<!-- Laboratory data end -->


<!-- CVS start -->
<table>
@if($Htn)
    <tr>
        <th  style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 1px 10px;"> CVS : HTN</th>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> How long : <span style="color: #000; font-size:16px; "> @if(Htn->hlyy) {{ Htn->hlyy }} years @endif @if(Htn->hlmm) {{ Htn->hlmm }} Month @endif @if(Htn->hldd) {{ Htn->hldd }} Days @endif</span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Stress/Angio : <span style="color: #000; font-size:16px;">@if(Htn->hlyy == 2) No @endif </span> </td>
    </tr>
@endif

<tr>
      <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Treatment : <span style="color: #000; font-size:16px;"> {{ Htn->treatment }} </span> </td>
      <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Advisory : <span style="color: #000; font-size:16px;"> {{ Htn->treatment }}  </span> </td>
    </tr>

    <tr>
        <th  style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Angina </i> </th>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Status : <span style="color: #000; font-size:16px;"> Stable </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Taking treatment : <span style="color: #000; font-size:16px;"> Yes </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Duration of treatment? : <span style="color: #000; font-size:16px;"> 10 </span> </td>
    </tr>

    <tr>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> What causes Angina? : <span style="color: #000; font-size:16px;"> Walking up stairs 2 flights </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> How it stops? : <span style="color: #000; font-size:16px;"> Rest or sorbitrate or both </span> </td>
    </tr>

    <tr>
        <th  style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px; width: 24%;"> <i> MI </i> </th>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> When : <span style="color: #000; font-size:16px;"> 19 years </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Medical : <span style="color: #000; font-size:16px;"> Thrombolysed </span> </td>
        <td  colspan="1" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Stented : <span style="color: #000; font-size:16px;"> Yes </span> </td>
    </tr>


    <tr>
         <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Treatment : <span style="color: #000; font-size:16px;">   </span> </td>
         <td  colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Advisory : <span style="color: #000; font-size:16px;">  </span> </td>
    </tr>

    <tr>
        <th   style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> NYHA </i>: <span style=" color: #444; font-size: 14px;  font-weight: 400;"> Class I (Mild) </span> </th>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> When : <span style="color: #000; font-size:16px;"> 19 years </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Stopped Antiplatelet : <span style="color: #000; font-size:16px;"> No </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Antiplatelet : <span style="color: #000; font-size:16px;"> Yes  </span> </td>
    </tr>

    <tr>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; ">  Antianginals : <span style="color: #000; font-size:16px;"> Yes  </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Statins : <span style="color: #000; font-size:16px;"> Yes  </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Anticoagulant : <span style="color: #000; font-size:16px;"> Yes  </span> </td>
        </tr>

    <tr>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> What Treatment : <span style="color: #000; font-size:16px;">   </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Other : <span style="color: #000; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Symptoms Improved : <span style="color: #000; font-size:16px;"> Yes </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> CABG : <span style="color: #000; font-size:16px;"> No </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> When : <span style="color: #000; font-size:16px;">   </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; ">  Symptoms improved : <span style="color: #000; font-size:16px;"> Yes  </span> </td>
    </tr>

    <tr>

        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Both Stented and CABG : <span style="color: #000; font-size:16px;"> No  </span> </td>
          <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Type of Graft : <span style="color: #000; font-size:16px;">   </span> </td>
          <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Repeat CAG : <span style="color: #000; font-size:16px;">   </span> </td>
        </tr>

 <!--    <tr>
        <th colspan="4"  style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> NYHA </i>: <span style=" color: #444; font-size: 14px;  font-weight: 400;"> Class I (Mild) </span> </th>
    </tr> -->


    <tr>
        <th   style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Pacemaker </i> </th>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Why : <span style="color: #000; font-size:16px;">  Testttt </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Pacemaker make / Type? : <span style="color: #000; font-size:16px;">  dfsdfsdfsdf </span> </td>
    </tr>


    <tr>
            <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> When  : <span style="color: #000; font-size:16px;">   </span> </td>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Check paperwork / Card / Chest xRay <span style="color: #000; font-size:16px;">   </span> </td>
        </tr>


</table>
<!-- CVS end -->


<!-- RESP start -->
<table>
    <tr>
        <th  style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 1px 10px;"> RESP : Asthma </th>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;    "> What causes : <span style="color: #000; font-size:16px;">  </span> </td>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Treatment : <span style="color: #000; font-size:16px;">   </span> </td>
    </tr>


    <tr>
        <td    style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;     "> How long : <span style="color: #000; font-size:16px;">  </span> </td>
        <td  colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> When did the last attack occur : <span style="color: #000; font-size:16px;"> 5 Years </span> </td>
        <td  colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> How was it treated? : <span style="color: #000; font-size:16px;">Admission  </span> </td>

    </tr>

    <tr>
        <td  colspan="3"   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> URTI LRTI Present : <span style="color: #000; font-size:16px;"> Yes </span> </td>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Advisory : <span style="color: #000; font-size:16px;"> Physical Consult  </span> </td>
        </tr>


    <tr>
        <th  style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px; width: 18%;"> <i> Smoking </i> </th>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> How Many : <span style="color: #000; font-size:16px;">   </span> </td>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> How Long : <span style="color: #000; font-size:16px;"> 2 years  </span> </td>
        <td  colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> When did you stop it : <span style="color: #000; font-size:16px;"> 10 months </span> </td>
    </tr>




    <tr>
        <th style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Snoring </i> </th>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Stop BANG Score : <span style="color: #000; font-size:16px;">  </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Sleep Study : <span style="color: #000; font-size:16px;"> Yes </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> CPAP : <span style="color: #000; font-size:16px;">  </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> OSA : <span style="color: #000; font-size:16px;"> Yes </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Fall asleep in the daytime : <span style="color: #000; font-size:16px;"> No  </span> </td>
    </tr>

   <!--  <tr>
        <td colspan="5" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Do you fall asleep in the daytime : <span style="color: #000; font-size:16px;"> No  </span> </td>
        </tr> -->

    <tr>
        <th  style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Cough </i> </th>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> How Long : <span style="color: #000; font-size:16px;">   </span> </td>
        <td colspan="3"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> What Cause : <span style="color: #000; font-size:16px;"> Yes </span> </td>
    </tr>


    <tr>
        <th   style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Sputum </i> </th>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> How Long : <span style="color: #000; font-size:16px;">   </span> </td>
        <td colspan="3"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Color : <span style="color: #000; font-size:16px;"> Yes </span> </td>
    </tr>

    <tr>
        <td colspan="3"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> What treatment : <span style="color: #000; font-size:16px;">   </span> </td>
        <td colspan="3"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> How Long : <span style="color: #000; font-size:16px;"> 2 Months  </span> </td>
    </tr>

</table>
<!-- RESP end -->



<!-- CNS start -->
<table >
    <tr>
        <th  style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 1px 10px;"> CNS : Stroke </th>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> When : <span style="color: #000; font-size:16px;">  </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Present status : <span style="color: #000; font-size:16px;"> Recovered  </span> </td>
    </tr>

    <tr>
        <td colspan="5" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> What treatment : <span style="color: #000; font-size:16px;">  </span> </td>
    </tr>

    <tr>
        <th style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Epilesy </i> </th>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> How long : <span style="color: #000; font-size:16px;">  </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Last seizure : <span style="color: #000; font-size:16px;">  </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Medication : <span style="color: #000; font-size:16px;">  </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Advisory<span style="color: #000; font-size:16px;"> Neurology consult  </span> </td>
    </tr>

    <tr>
        <th  style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Surgery (Brain) </i> </th>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> What surgery?  <span style="color: #000; font-size:16px;">   </span> </td>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Residual effect <span style="color: #000; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <th  style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> Spinal Cord </th>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> What surgery?  <span style="color: #000; font-size:16px;">   </span> </td>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Residual effect <span style="color: #000; font-size:16px;">   </span> </td>
    </tr>


    <tr>
        <th  style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Cognitive Impairment </i> </th>
        <td  colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Mini-Cog Score :  <span style="color: #000; font-size:16px;">   </span> </td>
        <td  colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Give the patient 3 tries to repeat the words : <span style="color: #000; font-size:16px;">   </span> </td>
    </tr>


    <tr>
         <td colspan="5"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> If subject has not finished clock drawing in 3 minutes : <span style="color: #000; font-size:16px;">   </span> </td>
        </tr>

</table>
<!-- CNS end -->



<!-- RENL start -->
<table>
    <tr>
        <th  style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 1px 10px; width: 20%;"> RENAL : Stones </th>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Surgery needed : <span style="color: #000; font-size:16px;"> Yes </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Status : <span style="color: #000; font-size:16px;"> Present  </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> What surgery : <span style="color: #000; font-size:16px;">  </span> </td>
    </tr>


    <tr>
        <td colspan="4" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> What surgery : <span style="color: #000; font-size:16px;">  </span> </td>
    </tr>

    <tr>
        <th style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Failure </i> </th>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Urea : <span style="color: #000; font-size:16px;">   </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Creatinine : <span style="color: #000; font-size:16px;">    </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> eGFR : <span style="color: #000; font-size:16px;">    </span> </td>
    </tr>

    <tr>
        <th style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> Hemo </th>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Frequency : <span style="color: #000; font-size:16px;">   </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; ">   <span style="color: #000; font-size:16px;">    </span> </td>
    </tr>

    <tr>
        <th  style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> Peritoneal </th>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Frequency : <span style="color: #000; font-size:16px;">   </span> </td>
        <td  colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Fisual  <span style="color: #000; font-size:16px;">    </span> </td>
    </tr>

    <tr>
        <th  style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> UTI </i> </th>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> When : <span style="color: #000; font-size:16px;">   </span> </td>
    </tr>


    <tr>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;">   CUE : <span style="color: #000; font-size:16px;">    </span> </td>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> What drugs   <span style="color: #000; font-size:16px;">    </span> </td>
    </tr>

</table>
<!-- RENL end -->



<!-- Diabetes start -->
<table>
    <tr>
        <th style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 1px 10px;"> Diabetes </th>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Rx : <span style="color: #000; font-size:16px;"> Yes </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> How much ? : <span style="color: #000; font-size:16px;"> Present  </span> </td>
    </tr>


    <tr>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Rx : <span style="color: #000; font-size:16px;"> Insulin </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> How much ? : <span style="color: #000; font-size:16px;">    </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 50%;"> What treatment : <span style="color: #000; font-size:16px;">  </span> </td>
    </tr>



    <tr>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Complications : <span style="color: #000; font-size:16px;">  Eyes </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Diet : <span style="color: #000; font-size:16px;"> Deit Control   </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Sugar check at home : <span style="color: #000; font-size:16px;"> Yes   </span> </td>
    </tr>

</table>
<!-- Diabetes end -->




<!-- Hepatic/GE start -->
<table>
    <tr>
        <th  style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 1px 10px;"> Hepatic/GE : Jaundice </th>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> When : <span style="color: #000; font-size:16px;"> 10 Months  </span> </td>
    </tr>

    <tr>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Cause : <span style="color: #000; font-size:16px;">   </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Viral status : <span style="color: #000; font-size:16px;">    </span> </td>
    </tr>

    <tr>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 40.5%;"> Child criteria : <span style="color: #000; font-size:16px;">   </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 50%;"> I.N.R   : <span style="color: #000; font-size:16px;"> </span> </td>
    </tr>

    <tr>
        <th colspan="2" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> <i> Reflux </i>: <span style=" color: #444; font-size: 14px;  font-weight: 400;"> "Prescribe H2 / PPI / Metoclopramide Warning Rapid Sequence No LMA." </span> </th>

    </tr>
</table>
<!-- Hepatic/GE end -->



<!-- Thyroid start -->
<table>
    <tr>
        <th colspan="2"  style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 1px 10px; width: 25%;"> Other : Thyroid </th>
        <td  colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;">  <span style="color: #000; font-size:16px;"> Hyper </span> </td>
    </tr>

    <tr>
        <td colspan="4"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> What treatment : <span style="color: #000; font-size:16px;">    </span> </td>
    </tr>

    <tr>
        <th style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px; width: 25%;"> <i> Fraility </i> </th>
       <!--  <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 23%;"> Supplement steroid : <span style="color: #000; font-size:16px;">   </span> </td> -->
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width: 30%;">Steroid intake in last 6 months : <span style="color: #000; font-size:16px;">    </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Supplement Steroid pre-op : <span style="color: #000; font-size:16px;">    </span> </td>
    </tr>

    <tr>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Cognition : <span style="color: #000; font-size:16px;">  Other Errors </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> General health status : <span style="color: #000; font-size:16px;"> 0   </span> </td>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> How would you describe your health? : <span style="color: #000; font-size:16px;">  ‘Excellent’, ‘Very good’, ‘Good’    </span> </td>
    </tr>

    <tr>
        <td  colspan="1" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Functional independence : <span style="color: #000; font-size:16px;">  2-4 </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Social support : <span style="color: #000; font-size:16px;"> Sometimes   </span> </td>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Medication use : <span style="color: #000; font-size:16px;">  Yes    </span> </td>
    </tr>

    <tr>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Nutrition : <span style="color: #000; font-size:16px;">  Yes </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Mood : <span style="color: #000; font-size:16px;"> No   </span> </td>
        <td colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Continence : <span style="color: #000; font-size:16px;">  Yes    </span> </td>
    </tr>

    <tr>
        <td  colspan="4" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Functional performance : <span style="color: #000; font-size:16px;">   One of :>20 s,or patient unwilling ,or requires assistance  </span> </td>
    </tr>

</table>
<!-- Thyroid end -->




<!-- Anaesthetic  start -->
<table >
    <tr>
        <th style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 1px 10px;"> Anaesthetic : History </th>
        <td colspan="4" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Past Anaesthetic History : <span style="color: #000; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <th style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px; width: 22%;"> <i> Physical Exam </i> </th>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;">
           <span>
            <b style="color: #000;"> Airway : </b> <span style="color: #000; font-size:16px;">  </span>
        </span>
            <span style="color:#444; font-size:14px; border-left: 1px solid #ddd; width: 17%; padding-left:10px; margin-left: 65px;"> MP : <span style="color: #000; font-size:16px; "> 1 </span> </span>
        </td>

        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Mouth Opening : <span style="color: #000; font-size:16px;">  </span> </td>
        <td  colspan="2"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Mentohyoid Distance : <span style="color: #000; font-size:16px;">   </span> </td>
    </tr>

 <!--    <tr>
           <td  colspan="5"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Mentohyoid Distance : <span style="color: #000; font-size:16px;">   </span> </td>
        </tr> -->

    <tr>
        <th colspan="2" style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> Neck </th>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Expanded : <span style="color: #000; font-size:16px;"> Fixed </span> </td>
    </tr>

    <tr>
        <th style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> Teeth </th>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; ">   <span style="color: #000; font-size:16px;"> Loose :</span> "Dental Protection Needed" </td>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> <span style="color: #000; font-size:16px;"> Denture : </span> Removable</td>
    </tr>

    <tr>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; ">  Lungs :<span style="color: #000; font-size:16px;">   </span> </td>
        <td  colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Heart :<span style="color: #000; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <td colspan="5" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; ">  CNS :<span style="color: #000; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <th  style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px;"> Pupils </th>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; width:28%;">  <span style="color: #000; font-size:16px;"> Equal  </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Right :<span style="color: #000; font-size:16px;">   </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Left :<span style="color: #000; font-size:16px;">   </span> </td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> E : <span style="color: #000; font-size:16px;">  </span> V : <span style="color: #000; font-size:16px;">  </span> M : <span style="color: #000; font-size:16px;">  </span></td>
    </tr>


    <tr>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> E : <span style="color: #000; font-size:16px;">  </span> V : <span style="color: #000; font-size:16px;">  </span> M : <span style="color: #000; font-size:16px;">  </span></td>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Other : <span style="color: #000; font-size:16px;">   </span> </td>
        <td colspan="3"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Venous access site : <span style="color: #000; font-size:16px;">  </span> </td>

    </tr>

    <tr>
        <td  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;  "> Spine exam for regional : <span style="color: #000; font-size:16px;">     </span> </td>
        <td style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Anaesthesia Plan : <span style="color: #000; font-size:16px;"> GA-ETT </span> </td>
        <td colspan="3" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Proposed Post-op Pain relief : <span style="color: #000; font-size:16px;">   </span> </td>

    </tr>

    <tr>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Peri-op plan explained to patient : <span style="color: #000; font-size:16px;"> Yes </span> </td>
        <td   style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px;"> Will take blood : <span style="color: #000; font-size:16px;">  Yes   </span> </td>
        <td colspan="2" style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; ">  <span style="color: #000; font-size:16px;"> Pregnant :</span> Explain Risks </td>
    </tr>

    <tr>
        <td  colspan="5"  style="color:#444; font-size:14px; border: 1px solid #ddd; padding: 1px 10px; "> Current medications : <span style="color: #000; font-size:16px;">   </span> </td>
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
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px; width: 24%;"> When :  <span style="color: #000; font-size:16px;"> 10 months  </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px; width: 17%;"> Where :  <span style="color: #000; font-size:16px;"> Hospital  </span> </td>
        <td colspan="2"  style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> Treatment :  <span style="color: #000; font-size:16px;"> Steriods / Dialysis  </span> </td>

    </tr>

    <tr>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> RESP :  <span style="color: #000; font-size:16px;"> SOBOE  </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> CVS :  <span style="color: #000; font-size:16px;">   Pulmonary Embolism  </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> RENL :  <span style="color: #000; font-size:16px;"> RENL  </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> Anticoagulants Fungal :  <span style="color: #000; font-size:16px;">  Yes </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> Vaccinated :  <span style="color: #000; font-size:16px;">  Yes </span> </td>
    </tr>


</table>
<!-- COVID Section End -->


<!-- Advisory Section start -->
<table>
    <tr>
        <th  style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 1px 10px; width: 19%;"> Advisory </th>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> 1 :  <span style="color: #000; font-size:16px;">   </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> 2 :  <span style="color: #000; font-size:16px;">   </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> 3 :  <span style="color: #000; font-size:16px;">   </span> </td>

    </tr>

    <tr>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> 4 :  <span style="color: #000; font-size:16px;">   </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> 5 :  <span style="color: #000; font-size:16px;">   </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> 6 :  <span style="color: #000; font-size:16px;">   </span> </td>
        <td   style="color:#444; font-size:14px;  border-bottom: none; border: 1px solid #ddd; padding: 1px 10px;"> 7 :  <span style="color: #000; font-size:16px;">   </span> </td>

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



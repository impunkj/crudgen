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
        .content table span{font-size: 14px !important;}
        table{border-collapse: collapse; width:100%}
        table td{vertical-align: top; padidng:0px 10px !important;}
        table tr th{font-size: 16px !important;}
    </style>
</head>
<body>
    <div class="content">

<table >
    <tr>
        <td style="width: 33%;">
            <h2 style="margin-top: 0; margin-bottom: 10px; font-size: 18px;"> D. JJ Medical </h2>
            <p style="color: #a0a0a0; margin-bottom: 6px; margin-top:  1px; font-size: 14px;"> Avvaiyar Street, Near Ekkaduthangal Bus Stop, Ekkaduthangal, </p>
            <p style="color: #a0a0a0;  margin-bottom: 6px; margin-top:  1px; font-size: 14px;"> <strong style="color: #444444;"> Phone No : </strong> 9854752301, 8547521023 </p>
            <p style="color: #a0a0a0;  margin-bottom: 6px; margin-top:  1px;     font-size: 14px;"> <strong style="color: #444444;"> Email : </strong> udaihospital@gmail.com </p>
        </td>

        <td style="vertical-align: top; text-align: center; width: 33%;">
            <h1 style="margin-top: 0;margin-bottom: 10px; color: #444444; font-size: 18px; "> PRE ANESTHEIC CHECKUP </h1>
            <img src="./logo.jpg" alt="">
        </td>

        <td style="text-align: right; width: 33%;">
            <img src="./photograph.jpg" alt="">
        </td>
    </tr>

</table>
@if($pationinfo)
<!-- Patient Information start -->
<table >
    <tr>
        <th colspan="4" style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 7px 10px;"> PATIENT INFORMATION </th>
    </tr>
    <tr>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width:28%;"> Name : <span style="color: #444444; font-size:16px;"> {{ $pationinfo->name }} </span> </td>
		@if($pationinfo->registerNumber)
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width:32%;"> Registration No : <span style="color: #444444; font-size:16px;">{{ $pationinfo->registerNumber }}</span> </td>
		@endif
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width:16%;"> BP : <span style="color: #444444; font-size:16px;"> 180/91 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width:24%;"> Date : <span style="color: #444444; font-size:16px;"> 22/10/2021 </span> </td>
    </tr>

    <tr>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Age  : <span style="color: #444444; font-size:16px;"> 25 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Hospital Name  : <span style="color: #444444; font-size:16px;"> Udai Hospital </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> HR : <span style="color: #444444; font-size:16px;"> 15 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Time : <span style="color: #444444; font-size:16px;"> 11:30am </span> </td>
    </tr>

    <tr>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> DOB :<span style="color: #444444; font-size:16px;"> 17/10/1991 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Height(cm) :  <span style="color: #444444; font-size:16px;"> 5.8ft </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> SaO2 : <span style="color: #444444; font-size:16px;"> 32 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Proposed Operation : <span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Sex :<span style="color: #444444; font-size:16px;">Male </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Weight (kg) :  <span style="color: #444444; font-size:16px;"> 68kg </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> BMI : <span style="color: #444444; font-size:16px;"> 64.2 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Pre-Operative Diagnosis : <span style="color: #444444; font-size:16px;"> </span> </td>
    </tr>

    <tr>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Pincode  :<span style="color: #444444; font-size:16px;">110016 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> ASA Physical Status : <span style="color: #444444; font-size:16px;"> 2 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Side  : <span style="color: #444444; font-size:16px;"> Left </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Allergies :  <span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>
</table>
@endif
<!-- Patient Information end -->

<!-- Labortaory Data start -->
<table >
    <tr>
        <th colspan="6" style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 7px 10px;"> LABORATORY DATA </th>
    </tr>
    <tr>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 19%;"> Total Bil : <span style="color: #444444; font-size:16px;"> 1.5 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Dir. Bil : <span style="color: #444444; font-size:16px;"> 0.5 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Alk Phos : <span style="color: #444444; font-size:16px;"> 88 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> SGOT  : <span style="color: #444444; font-size:16px;"> 55 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> SGPT : <span style="color: #444444; font-size:16px;"> 76 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> LDH : <span style="color: #444444; font-size:16px;"> 04 </span> </td>
    </tr>

    <tr>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Urea : <span style="color: #444444; font-size:16px;"> 55 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Creatine : <span style="color: #444444; font-size:16px;"> 1.7 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Na : <span style="color: #444444; font-size:16px;"> 5.8 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> K : <span style="color: #444444; font-size:16px;"> 5.8 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Ca : <span style="color: #444444; font-size:16px;"> 1.9 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Mg : <span style="color: #444444; font-size:16px;"> 2 </span> </td>
    </tr>

    <tr>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Hb : <span style="color: #444444; font-size:16px;"> 15</span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> WBC : <span style="color: #444444; font-size:16px;"> 12000</span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Platelets : <span style="color: #444444; font-size:16px;"> 2.1</span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> PCV : <span style="color: #444444; font-size:16px;"> 44 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Alb : <span style="color: #444444; font-size:16px;">  </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Protein : <span style="color: #444444; font-size:16px;">  </span> </td>
    </tr>

    <tr>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> APTT : <span style="color: #444444; font-size:16px;"> 15  </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> PT : <span style="color: #444444; font-size:16px;"> 22 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> INR : <span style="color: #444444; font-size:16px;"> 1.5 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> RBS : <span style="color: #444444; font-size:16px;"> 120 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> PPBS : <span style="color: #444444; font-size:16px;"> 120 </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;">HbA1c : <span style="color: #444444; font-size:16px;"> 6.2 </span> </td>
    </tr>

    <tr>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> ECG : <span style="color: #444444; font-size:16px;"> Nsr </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> HIV : <span style="color: #444444; font-size:16px;"> -ve </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> HBS Ag : <span style="color: #444444; font-size:16px;"> -ve </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> HCV : <span style="color: #444444; font-size:16px;"> +ve </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;">RTPCR : <span style="color: #444444; font-size:16px;"> +ve </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;">   <span style="color: #444444; font-size:16px;">  </span> </td>
    </tr>

    <tr>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Other : <span style="color: #444444; font-size:16px;">   </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Other : <span style="color: #444444; font-size:16px;">   </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Other : <span style="color: #444444; font-size:16px;">   </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Other : <span style="color: #444444; font-size:16px;">   </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;">  <span style="color: #444444; font-size:16px;">   </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;">  <span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Cardiac echo  : <span style="color: #444444; font-size:16px;">  Dilated lv apical hypokinesia Roma status MV prosthetic valve </span> </td>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Chest X-Ray : <span style="color: #444444; font-size:16px;">  Nodule in the upper right lobe, trachea deviated to the right </span> </td>
    </tr>

    <tr>
        <td colspan="6" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Other  : <span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>

</table>
<!-- Laboratory data end -->


<!-- CVS start -->
<table>
    <tr>
        <th colspan="6" style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 7px 10px;"> CSV </th>
    </tr>
    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> HTN </i> </th>
    </tr>
    <tr>
        <td colspan="2" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> How long : <span style="color: #444444; font-size:16px; "> 10 years </span> </td>
        <td colspan="4" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Stress/Angio : <span style="color: #444444; font-size:16px;"> No </span> </td>
    </tr>

<tr>
      <td colspan="6" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Treatment : <span style="color: #444444; font-size:16px;"> Losartan amlodepine metoprolol </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> Angina </i> </th>
    </tr>

    <tr>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Status : <span style="color: #444444; font-size:16px;"> Stable </span> </td>
        <td style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Taking treatment : <span style="color: #444444; font-size:16px;"> Yes </span> </td>
        <td colspan="4" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Duration of treatment? : <span style="color: #444444; font-size:16px;"> 10 </span> </td>

    </tr>

    <tr>
        <td colspan="2" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> What causes Angina? : <span style="color: #444444; font-size:16px;"> Walking up stairs 2 flights </span> </td>
        <td colspan="4" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> How it stops? : <span style="color: #444444; font-size:16px;"> Rest or sorbitrate or both </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> MI </i> </th>
    </tr>

    <tr>
        <td  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width:28%"> When : <span style="color: #444444; font-size:16px;"> 19 years </span> </td>
        <td  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width:30%"> Medical : <span style="color: #444444; font-size:16px;"> Thrombolysed </span> </td>
        <td  colspan="4" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Stented : <span style="color: #444444; font-size:16px;"> Yes </span> </td>
    </tr>

    <tr>
         <td colspan="6" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Treatment : <span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <td  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> When : <span style="color: #444444; font-size:16px;"> 19 years </span> </td>
        <td  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Stopped Antiplatelet : <span style="color: #444444; font-size:16px;"> No </span> </td>
        <td colspan="4"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Antiplatelet : <span style="color: #444444; font-size:16px;"> Yes  </span> </td>
    </tr>

    <tr>
      <td   style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; ">  Antianginals : <span style="color: #444444; font-size:16px;"> Yes  </span> </td>
        <td   style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Statins : <span style="color: #444444; font-size:16px;"> Yes  </span> </td>
        <td  colspan="4" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Anticoagulant : <span style="color: #444444; font-size:16px;"> Yes  </span> </td>
        </tr>

    <tr>
        <td colspan="2" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> What Treatment : <span style="color: #444444; font-size:16px;">   </span> </td>
        <td colspan="4" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Other : <span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <td  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Symptoms Improved : <span style="color: #444444; font-size:16px;"> Yes </span> </td>
        <td  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> CABG : <span style="color: #444444; font-size:16px;"> No </span> </td>
        <td  colspan="4" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> When : <span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>

    <tr>
          <td   style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; ">  Symptoms improved : <span style="color: #444444; font-size:16px;"> Yes  </span> </td>
        <td    style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Both Stented and CABG : <span style="color: #444444; font-size:16px;"> No  </span> </td>
          <td   colspan="4" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Type of Graft : <span style="color: #444444; font-size:16px;">   </span> </td>
        </tr>

    <tr>
        <td colspan="6" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Repeat CAG : <span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> NYHA </i> </th>
    </tr>

    <tr>
        <td colspan="6" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> NYHA Class  : <span style="color: #444444; font-size:16px;"> Class I (Mild)  </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> Pacemaker </i> </th>
    </tr>

    <tr>
        <td   style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Why : <span style="color: #444444; font-size:16px;">  Testttt </span> </td>
        <td colspan="5" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Pacemaker make / Type? : <span style="color: #444444; font-size:16px;">  dfsdfsdfsdf </span> </td>
    </tr>

    <tr>
            <td   style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> When  : <span style="color: #444444; font-size:16px;">   </span> </td>
        <td colspan="5" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Check paperwork / Card / Chest xRay <span style="color: #444444; font-size:16px;">   </span> </td>
        </tr>


</table>
<!-- CVS end -->


<!-- RESP start -->
<table>
    <tr>
        <th colspan="6" style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 7px 10px; width: 100%;"> RESP </th>
    </tr>
    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> Asthma </i> </th>
    </tr>
    <tr>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 40.5%;"> What causes : <span style="color: #444444; font-size:16px;">  </span> </td>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 50%;"> Treatment : <span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> How long : <span style="color: #444444; font-size:16px;">  </span> </td>
        <td colspan="3"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> When did the last attack occur : <span style="color: #444444; font-size:16px;">  </span> </td>
    </tr>

    <tr>
          <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> How was it treat? : <span style="color: #444444; font-size:16px;">  </span> </td>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> URTI LRTI Present : <span style="color: #444444; font-size:16px;"> Yes </span> </td>
        </tr>

        <tr>
             <td colspan="6" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Advisory : <span style="color: #444444; font-size:16px;"> Physical Consult  </span> </td>
            </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> Smoking </i> </th>
    </tr>

    <tr>
        <td colspan="3"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> How Many : <span style="color: #444444; font-size:16px;">   </span> </td>
        <td colspan="3"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> When did you stop it : <span style="color: #444444; font-size:16px;"> Yes </span> </td>
    </tr>

    <tr>
        <td colspan="6"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> How Long : <span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> Snoring </i> </th>
    </tr>

    <tr>
        <td colspan="2" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Stop BANG Score : <span style="color: #444444; font-size:16px;">  </span> </td>
        <td  colspan="2" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Sleep Study : <span style="color: #444444; font-size:16px;"> Yes </span> </td>
        <td colspan="2" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> CPAP : <span style="color: #444444; font-size:16px;">  </span> </td>
    </tr>

    <tr>
         <td colspan="2"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> OSA : <span style="color: #444444; font-size:16px;"> Yes </span> </td>
        <td colspan="4" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Do you fall asleep in the daytime : <span style="color: #444444; font-size:16px;"> No  </span> </td>
        </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> Cough </i> </th>
    </tr>

    <tr>
        <td colspan="3"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> How Long : <span style="color: #444444; font-size:16px;">   </span> </td>
        <td colspan="3"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> What Cause : <span style="color: #444444; font-size:16px;"> Yes </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> Sputum </i> </th>
    </tr>

    <tr>
        <td colspan="3"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> How Long : <span style="color: #444444; font-size:16px;">   </span> </td>
        <td colspan="3"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Color : <span style="color: #444444; font-size:16px;"> Yes </span> </td>
    </tr>

    <tr>
        <td colspan="3"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> What treatment : <span style="color: #444444; font-size:16px;">   </span> </td>
        <td colspan="3"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> How Long : <span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>

</table>
<!-- RESP end -->



<!-- CNS start -->
<table >
    <tr>
        <th colspan="6" style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 7px 10px; width: 100%;"> CNS </th>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> Stroke </i> </th>
    </tr>

    <tr>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 40.5%;"> When : <span style="color: #444444; font-size:16px;">  </span> </td>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 50%;"> Present status : <span style="color: #444444; font-size:16px;"> Recovered  </span> </td>
    </tr>

    <tr>
        <td colspan="6" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 50%;"> What treatment : <span style="color: #444444; font-size:16px;">  </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> Epilesy </i> </th>
    </tr>

    <tr>
        <td  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> How long : <span style="color: #444444; font-size:16px;">  </span> </td>
        <td   style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Last seizure : <span style="color: #444444; font-size:16px;">  </span> </td>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Medication : <span style="color: #444444; font-size:16px;">  </span> </td>
        <td  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Neurology consult : <span style="color: #444444; font-size:16px;"> Yes </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> Surgery </i> </th>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> Brain </th>
    </tr>

    <tr>
        <td colspan="3"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> What surgery?  <span style="color: #444444; font-size:16px;">   </span> </td>
        <td colspan="3"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Residual effect <span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> Spinal Cord </th>
    </tr>

    <tr>
        <td colspan="3"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> What surgery?  <span style="color: #444444; font-size:16px;">   </span> </td>
        <td colspan="3"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Residual effect <span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> Cognitive Impairment </i> </th>
    </tr>

    <tr>
        <td  colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Mini-Cog Score :  <span style="color: #444444; font-size:16px;">   </span> </td>
        <td  colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Give the patient 3 tries to repeat the words : <span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>

    <tr>
         <td colspan="6"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> If subject has not finished clock drawing in 3 minutes : <span style="color: #444444; font-size:16px;">   </span> </td>
        </tr>

</table>
<!-- CNS end -->



<!-- RENL start -->
<table>
    <tr>
        <th colspan="6" style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 7px 10px; width: 100%;"> RENAL </th>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> Stones </i> </th>
    </tr>

    <tr>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 40.5%;"> Surgery needed : <span style="color: #444444; font-size:16px;"> Yes </span> </td>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 50%;"> Status : <span style="color: #444444; font-size:16px;"> Present  </span> </td>
    </tr>

    <tr>
        <td colspan="6" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 50%;"> What surgery : <span style="color: #444444; font-size:16px;">  </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> Failure </i> </th>
    </tr>

    <tr>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 40.5%;"> Urea : <span style="color: #444444; font-size:16px;">   </span> </td>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 50%;"> Creatinine : <span style="color: #444444; font-size:16px;">    </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> Hemo </th>
    </tr>
    <tr>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 40.5%;"> Frequency : <span style="color: #444444; font-size:16px;">   </span> </td>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 50%;">   <span style="color: #444444; font-size:16px;">    </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> Peritoneal </th>
    </tr>
    <tr>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Frequency : <span style="color: #444444; font-size:16px;">   </span> </td>
        <td colspan="3"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;">    <span style="color: #444444; font-size:16px;">    </span> </td>
    </tr>

    <tr>
        <td colspan="6" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Fisual  <span style="color: #444444; font-size:16px;">    </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> UTI </i> </th>
    </tr>

    <tr>
        <td colspan="6" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> When : <span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <td colspan="2" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Treated : <span style="color: #444444; font-size:16px;">   </span> </td>
        <td colspan="2"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;">   CUE : <span style="color: #444444; font-size:16px;">    </span> </td>
        <td colspan="2"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> What drugs   <span style="color: #444444; font-size:16px;">    </span> </td>
    </tr>

</table>
<!-- RENL end -->



<!-- Diabetes start -->
<table>
    <tr>
        <th colspan="6" style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 7px 10px; width: 100%;"> Diabetes </th>
    </tr>


    <tr>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 40.5%;"> Rx : <span style="color: #444444; font-size:16px;"> Yes </span> </td>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 50%;"> How much ? : <span style="color: #444444; font-size:16px;"> Present  </span> </td>
    </tr>

    <tr>
        <td colspan="6" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 50%;"> What surgery : <span style="color: #444444; font-size:16px;">  </span> </td>
    </tr>


    <tr>
        <td colspan="2" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Complications : <span style="color: #444444; font-size:16px;">  Eyes </span> </td>
        <td colspan="2" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;"> Diet : <span style="color: #444444; font-size:16px;"> Deit Control   </span> </td>
        <td colspan="2" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Sugar check at home : <span style="color: #444444; font-size:16px;"> Yes   </span> </td>
    </tr>

</table>
<!-- Diabetes end -->




<!-- Hepatic/GE start -->
<table>
    <tr>
        <th colspan="6" style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 7px 10px; width: 100%;"> Hepatic/GE </th>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> Jaundice </i> </th>
    </tr>

    <tr>
        <td colspan="6" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 40.5%;"> When : <span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 40.5%;"> Cause : <span style="color: #444444; font-size:16px;">   </span> </td>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 50%;"> Viral status : <span style="color: #444444; font-size:16px;">    </span> </td>
    </tr>

    <tr>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 40.5%;"> Child criteria : <span style="color: #444444; font-size:16px;">   </span> </td>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 50%;"> I.N.R   : <span style="color: #444444; font-size:16px;"> </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> Reflux </i> </th>
    </tr>

    <tr>
        <td colspan="6" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 40.5%;"> "Prescribe H2 / PPI / Metoclopramide Warning Rapid Sequence No LMA."  <span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>


</table>
<!-- Hepatic/GE end -->



<!-- Thyroid start -->
<table>
    <tr>
        <th colspan="6" style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 7px 10px; width: 100%;"> Other </th>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> Thyroid </i> </th>
    </tr>

    <tr>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 40.5%;">  <span style="color: #444444; font-size:16px;"> Hyper </span> </td>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 50%;">What treatment : <span style="color: #444444; font-size:16px;">    </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> Supplement/Stroid </i> </th>
    </tr>

    <tr>
        <td colspan="6" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 40.5%;">   <span style="color: #444444; font-size:16px;">  Supplement Steroid pre-op  </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> Fraility </i> </th>
    </tr>

    <tr>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 40.5%;"> Supplement steroid : <span style="color: #444444; font-size:16px;">   </span> </td>
        <td colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 50%;">Steroid intake in last 6 months : <span style="color: #444444; font-size:16px;">    </span> </td>
    </tr>

    <tr>
        <td colspan="6" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 40.5%;"> Fraility score  <span style="color: #444444; font-size:16px;">    </span> </td>
    </tr>

    <tr>
        <td  colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;  "> Cognition : <span style="color: #444444; font-size:16px;">  Other Errors </span> </td>
        <td  colspan="3" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;  "> General health status : <span style="color: #444444; font-size:16px;"> 0   </span> </td>
    </tr>

     <tr>
     <td colspan="6"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;  "> How would you describe your health? : <span style="color: #444444; font-size:16px;">  ‘Excellent’, ‘Very good’, ‘Good’    </span> </td>
     </tr>

    <tr>
        <td  colspan="1" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;  "> Functional independence : <span style="color: #444444; font-size:16px;">  2-4 </span> </td>
        <td  colspan="2" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;  "> Social support : <span style="color: #444444; font-size:16px;"> Sometimes   </span> </td>
        <td colspan="3"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;  "> Medication use : <span style="color: #444444; font-size:16px;">  Yes    </span> </td>
    </tr>

    <tr>
        <td  colspan="1" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;  "> Nutrition : <span style="color: #444444; font-size:16px;">  Yes </span> </td>
        <td  colspan="2" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;  "> Mood : <span style="color: #444444; font-size:16px;"> No   </span> </td>
        <td colspan="3"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;  "> Continence : <span style="color: #444444; font-size:16px;">  Yes    </span> </td>
    </tr>

    <tr>
        <td  colspan="6" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px;  "> Functional performance : <span style="color: #444444; font-size:16px;">   One of :>20 s,or patient unwilling ,or requires assistance  </span> </td>
    </tr>

</table>
<!-- Thyroid end -->




<!-- Anaesthetic  start -->
<table >
    <tr>
        <th colspan="6" style="text-align: left; font-size: 18px; font-weight: 600; background-color: #dbdbdb; padding: 7px 10px; width: 100%;"> Anaesthetic </th>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> History </i> </th>
    </tr>

    <tr>
        <td colspan="6" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 40.5%;"> Past Anaesthetic History : <span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 16px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> <i> Physical Exam </i> </th>
    </tr>

    <tr>
        <td colspan="2" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 25%;"> Airway : <span style="color: #444444; font-size:16px;">  </span> </td>
        <td  colspan="2"   style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 25%;"> MP : <span style="color: #444444; font-size:16px;"> 1 </span> </td>
        <td   colspan="2"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 25%;"> Mouth Opening : <span style="color: #444444; font-size:16px;">  </span> </td>
    </tr>

    <tr>
           <td  colspan="6"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 25%;"> Mentohyoid Distance : <span style="color: #444444; font-size:16px;">   </span> </td>
        </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> Neck </th>
    </tr>

    <tr>
        <td colspan="6" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 25%;"> Expanded : <span style="color: #444444; font-size:16px;"> Fixed </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> Teeth </th>
    </tr>

    <tr>
        <td colspan="4" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; ">   <span style="color: #444444; font-size:16px;"> Loose </span> </td>
        <td  colspan="2"   style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> <span style="color: #444444; font-size:16px;"> Removable </span> </td>
    </tr>

    <tr>
        <td colspan="4" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; ">  Lungs :<span style="color: #444444; font-size:16px;">   </span> </td>
        <td  colspan="2"   style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Heart :<span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <td colspan="6" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; ">  CNS :<span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <th colspan="6" style="text-align: left; font-size: 14px; font-weight: 500; color: #000; border: 1px solid #ddd; padding: 7px 10px;"> Pupils </th>
    </tr>

    <tr>
        <td colspan="2" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width:33%;">  <span style="color: #444444; font-size:16px;"> Equal  </span> </td>
        <td  colspan="2"   style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Right :<span style="color: #444444; font-size:16px;">   </span> </td>
        <td  colspan="2"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; "> Left :<span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>

    <tr>
        <td colspan="2" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 25%;"> E : <span style="color: #444444; font-size:16px;">  </span> </td>
        <td  colspan="2"   style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 25%;"> V : <span style="color: #444444; font-size:16px;">     </span> </td>
        <td   colspan="2"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 25%;"> M : <span style="color: #444444; font-size:16px;">  </span> </td>
    </tr>

    <tr>
          <td  colspan="2"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 25%;"> Other : <span style="color: #444444; font-size:16px;">   </span> </td>
             <td colspan="2" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 25%;"> Venous access site : <span style="color: #444444; font-size:16px;">  </span> </td>
        <td  colspan="2"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 25%;"> Spine exam for regional : <span style="color: #444444; font-size:16px;">     </span> </td>
        </tr>

    <tr>

        <td   colspan="2"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 25%;"> Anaesthesia Plan : <span style="color: #444444; font-size:16px;"> GA-ETT </span> </td>
        <td  colspan="2"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 25%;"> Proposed Post-op Pain relief : <span style="color: #444444; font-size:16px;">   </span> </td>
          <td colspan="2" style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 25%;"> Peri-op plan explained to patient : <span style="color: #444444; font-size:16px;"> Yes </span> </td>
    </tr>

    <tr>

        <td  colspan="2"   style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 25%;"> Will take blood : <span style="color: #444444; font-size:16px;">  Yes   </span> </td>
        <td   colspan="2"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 25%;">  <span style="color: #444444; font-size:16px;"> Pregnanat </span> </td>
        <td  colspan="2"  style="color:#8c8c8c; font-size:14px; border: 1px solid #ddd; padding: 6px 10px; width: 25%;"> Current medications : <span style="color: #444444; font-size:16px;">   </span> </td>
    </tr>
</table>
<!-- Anaesthetic  end -->
</div>

</body>
</html>



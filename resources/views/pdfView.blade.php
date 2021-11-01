<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Format</title>

    <style>
        *{font-family: 'Roboto', sans-serif;}
        .column {
  float: left;
  width: 45%;
    margin: 0 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.first-col, .second-col{
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 48.5%;
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    float: left;
}
.second-col{padding-right: 0;}
/* .second-col{float: left;  -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 48.5%;} */

/* .container{max-width: 1040px;     margin: 0 auto;} */
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table td, table th {
  border: 1px solid #a5a5a5;
  padding: 5px 10px;
  font-size: 14px;
}

.without-border-table td, .without-border-table th {border: none !important;}


table th {
  padding-top: 5px;
  padding-bottom: 5px;
  text-align: left;
  font-weight: 500;
  color: #000;
}

.one-column{
    margin-left: 12px;
    margin-right: 73px;
}
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 first-col">
            <p style="text-align: center; font-weight:bold; font-size: 18px;"> Pre Operative Anesthetic Evaluation </p>
            <table>
                <tr>
                    <th style="border-right: none !important;"> PreOp Diagnosis: </th>
                    <th style="border-left: none !important; border-right: none !important;"></th>
                    <th style="border-left: none !important; border-right: none !important;"></th>
                    <th style="border-left: none !important; border-right: none !important;"></th>
                    <th style="border-left: none !important;"></th>
                </tr>
                <tr>
                    <th  style="border-right: none !important;"> Planned Procedure: Liver Transplant </th>
                    <th style="border-left: none !important; border-right: none !important;"></th>
                    <th style="border-left: none !important; border-right: none !important;"></th>
                    <th style="border-left: none !important; border-right: none !important;"></th>
                    <th style="border-left: none !important;"></th>
                </tr>
                <tr>
                    <th style="width:45%"> Age: 40yr </th>
                    <th> Sex : {{$gender}} </th>
                    <th> Ht: {{$height}}</th>
                    <th> Wt: {{$weight}}</th>
                    <th> BMI: {{$BMI}}</th>
                </tr>
            </table>
        </div>
        <div class="col-md-6 second-col">
            <table class="without-border-table" style="border: 1px solid #a5a5a5;">
                <tr>
                    <th style="border-bottom: 1px solid #a5a5a5  !important;"> Facility </th>
                    <th style="border-bottom: 1px solid #a5a5a5 !important;"></th>
                    <th style="border-bottom: 1px solid #a5a5a5 !important;"></th>
                    <th style="border-bottom: 1px solid #a5a5a5 !important;"></th>
                    <th style="border-bottom: 1px solid #a5a5a5 !important;"></th>
                </tr>
                <tr>
                    <th> Patient Name: </th>
                    <td> {{$name}} </td>
                    <td></td>
                    <td> </td>
                </tr>
                <tr>
                    <th> DOB: </th>
                    <td> 4/20/1975 </td>
                    <th> MRN:  </th>
                    <td> 9123463 </td>
                </tr>
                <tr>
                    <th> DOS: </th>
                    <td> 4/20/2015 </td>
                    <th> Account #:  </th>
                    <td> 9845712563 </td>
                </tr>
                <tr>
                    <th> Physician: </th>
                    <td> Merdith Grey </td>
                    <td></td>
                    <td> </td>
                </tr>
            </table>
        </div>

      </div>
    </div>

  <!-- previous start -->
    <div class="container">
        <div class="row">

   <div class="col-md-12" style="margin-top: 20px;">
    <table class="without-border-table" style="border: 1px solid #a5a5a5;">
        <tr style=" background: #d4d4d4; border: 1px solid #a5a5a5;">
            <th style="width:33%; font-weight: 700; border-right: 1px solid #a5a5a5 !important;"> Previous Surgical History </th>
            <th style="width:33%; font-weight: 700; border-right: 1px solid #a5a5a5 !important;"> Current Medications <small style="font-size: 11px;"> (Check it taken today) </small> </th>
            <th style="width:33%; font-weight: 700;"> Allergies </th>
        </tr>

        <tr>
            <td  style="border-right: 1px solid #a5a5a5 !important;"> <p class="mb-0">2014-Colonoscopy, Righi side. no oomplicalions </p>  </td>
            <td style="border-right: 1px solid #a5a5a5 !important;"> <p class="mb-0"> metoprolol 1 0MG  </p>  </td>
            <td> <p class="mb-0"> Penicillins (Moderate)  </p>  </td>
        </tr>
        <tr>
            <td style="border-right: 1px solid #a5a5a5 !important;"> <p class="mb-0"> 2014-Appendectomy, Right side, no oomplications </p>  </td>
            <td style="border-right: 1px solid #a5a5a5 !important;"> <p class="mb-0"> insulin regular 5UNITS  </p>  </td>
            <td> <p class="mb-0"> Sulfa (Sulfonamide Antibiotics) (Moderate) </p>  </td>
        </tr>

        <tr>
            <td style="border-right: 1px solid #a5a5a5 !important;"> <p class="mb-0"> 2014-Laparoscopic cholecystectomy, Right side, no complications  </p>  </td>
            <td style="border-right: 1px solid #a5a5a5 !important;"> <p class="mb-0"> metFORMIN 25MG  </p>  </td>
            <td> <p class="mb-0"> Talwin (Moderale)  </p>  </td>
        </tr>

        <tr>
            <td style="border-right: 1px solid #a5a5a5 !important;"> <p class="mb-0"> 2014-Coronary angioplasty, Right side, no complications  </p>  </td>
            <td style="border-right: 1px solid #a5a5a5 !important;"> <p class="mb-0"> albuterol 1PUFF  </p>  </td>
            <td>   </td>
        </tr>

        <tr>
            <td style="border-right: 1px solid #a5a5a5 !important;">  </td>
            <td style="border-right: 1px solid #a5a5a5 !important;"> <p class="mb-0"> Atravent 1 PUFF </p>  </td>
            <td>   </td>
        </tr>

        <tr>
            <td style="border-right: 1px solid #a5a5a5 !important;">  </td>
            <td style="border-right: 1px solid #a5a5a5 !important;"> <p class="mb-0"> Plavix  </p>  </td>
            <td>   </td>
        </tr>

    </table>
</div>

        </div>
    </div>
    <!-- previous end -->


    <!-- previous-two -col start-->
    <div class="container">
        <div class="row">

   <div class="col-md-12">
    <table class="without-border-table" style="border: 1px solid #a5a5a5; border-top:none">
        <tr>
            <td style="width: 50%;  border-right: 1px solid #a5a5a5 !important;"> <p class="mb-0"> Anesthetic Issues:  </p>  </td>
            <td style="width: 50%;"> <p class="mb-0"> Social History:  </p>  </td>
        </tr>
        <tr>
            <td style=" border-right: 1px solid #a5a5a5 !important;"> <p class="mb-0"> Comments:   </p>  </td>
            <td> </td>
        </tr>
        <tr>
            <td  style=" border-right: 1px solid #a5a5a5 !important;"> <p class="mb-0"> Family History:   </p>  </td>
            <td> </td>
        </tr>
        <tr>
            <td  style=" border-right: 1px solid #a5a5a5 !important;"> <p class="mb-0">Comments:  </p>  </td>
            <td> </td>
        </tr>
    </table>
</div>

        </div>
    </div>
    <!-- previous-two -col end-->



    <!--Patient History start -->
    <div class="container">
        <div class="row">

   <div class="col-md-12" style="margin-top: 20px;">
    <table>
        <tr style=" background: #d4d4d4; border: 1px solid #a5a5a5;">
            <th colspan="2" style="font-weight: 700;"> Patient History and Review of Systems <small  style="font-size: 11px;">(Unless exe#;p/Jo.75 are ro1ed ar.d documM19d, 1he system ;s within nomial limi/s) </small> </th>
        </tr>

        <tr>
            <td style="width: 20%;"> 1.CVS  </td>
            <td> Essential Hvoertension (Benion), Coronary Arterv Disease, Anaina, Chest pain  </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 2.Pulm </td>
            <td> Asthma, Mild Asthma, Mild COPD  </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 3. GI/Hep  </td>
            <td> Gastroesoohaoeal reflux disease  </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 4. RenaVGU </td>
            <td>   </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 5. Endocrine   </td>
            <td> Non-Insulin Dependent Diabetes  </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 6. Neuro  </td>
            <td> Neuropathv  </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 7. Musculo  </td>
            <td> Chronic Low Back Pain  </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 8. HemOnclD  </td>
            <td>   </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 9. Psych   </td>
            <td>  </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 10. OBGYN </td>
            <td>   </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 11. Other  </td>
            <td>   </td>
        </tr>

    </table>
</div>

        </div>
    </div>
    <!-- Patient History end -->



     <!--Physical Exam start -->
     <div class="container">
        <div class="row">

   <div class="col-md-12" style="margin-top: 20px;">
    <table>
        <tr style=" background: #d4d4d4; border: 1px solid #a5a5a5;">
            <th colspan="2" style="font-weight: 700;"> Physical Exam <small  style="font-size: 11px;">(Syste-n 9xam is deooed 1ml 6ss othem/58 docum9f1fed)  </small> </th>
        </tr>

        <tr>
            <td style="width: 20%;"> 1.	Vitals   </td>
            <td> BP /  HR: RR: SpO2: Temp: Pain Score: 02:  </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 2. Airway  </td>
            <td>    </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 3. General</td>
            <td>  </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 4. HEEN </td>
            <td>   </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 5. Heart    </td>
            <td>  </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 6. Lung   </td>
            <td>    </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 7. Abdomcn   </td>
            <td>   </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 8. Neuro  </td>
            <td>   </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 9. Ex1remilies    </td>
            <td>  </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 10. Skin </td>
            <td>   </td>
        </tr>
        <tr>
            <td style="width: 20%;"> 11. Other  </td>
            <td>   </td>
        </tr>

    </table>
</div>

        </div>
    </div>
    <!-- Physical Exam end -->



    <!-- Anesthesia Plan  start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table style="margin-top: 20px;">
                        <tr style=" background: #d4d4d4;">
                            <th> Anesthesia Plan </th>
                        </tr>
                        <tr>
                            <td> ASA: &nbsp;&nbsp;&nbsp; NPO:  </td>
                        </tr>
                        <tr>
                            <td> Assessment Comments:  </td>
                        </tr>
                        <tr>
                            <td> Plan:  </td>
                        </tr>
                        <tr>
                            <td> Plan Commenls:   </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    <!-- Anesthesia Plan  end -->



    <!--Risk  start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table style="margin-top: 20px;">
                    <tr style=" background: #d4d4d4;">
                        <th>  Risks/Benefits  </th>
                    </tr>

                </table>
            </div>
        </div>
    </div>
<!-- Risk  end -->

</body>
</html>
<?php
 
// Importing DBConfig.php file.
include 'DBConfig.php';
 
// Connecting to MySQL Database.
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
 // Getting the received JSON into $json variable.
 $json = file_get_contents('php://input');
 
 // decoding the received JSON and store into $obj variable.
 $obj = json_decode($json,true);
 
 // Populate JSON .
 $S_ID = $obj['Patient_ID'];
 $Patient_ID = $obj['Patient_ID'];
 $Practitioner_ID = $obj['Practitioner_ID'];
 $Patient_Details_Date = $obj['Patient_Details_Date'];
 $Patient_Fist_Name = $obj['Patient_Fist_Name'];
 $Patient_Last_Name = $obj['Patient_Last_Name'];
 $Patient_DOB = $obj['Patient_DOB'];
 $Patient_Gender = $obj['Patient_Gender'];
 $Patient_Contact_Number = $obj['Patient_Contact_Number'];
 $Patient_Address = $obj['Patient_Address'];
 $Patient_Pregnant = $obj['Patient_Pregnant'];
 $Patient_Smoke = $obj['Patient_Smoke'];
 $Patient_Temperature = $obj['Patient_Temperature'];
 $Patient_CoughSeverity = $obj['Patient_CoughSeverity'];
 $Patient_SmellLoss = $obj['Patient_SmellLoss'];
 $Patient_ShortnessOfBreath = $obj['Patient_ShortnessOfBreath'];
 $Patient_FatigeSeverity = $obj['Patient_FatigeSeverity'];
 $Patient_DrowsynessSeverity  = $obj['Patient_DrowsynessSeverity'];
 $Patient_MuscleAcheSeverity = $obj['Patient_MuscleAcheSeverity'];
 $Patient_HeadAcheSeverity = $obj['Patient_HeadAcheSeverity'];
 $Patient_SoreThroat = $obj['Patient_SoreThroat'];
 $Patient_RunnyNose = $obj['Patient_RunnyNose'];
 $Patient_TasteLoss = $obj['Patient_TasteLoss'];
 $Patient_AnxietySeverity  = $obj['Patient_AnxietySeverity'];
 $Patient_DepressionSeverity = $obj['Patient_DepressionSeverity'];
 $Patient_OCDSeverity = $obj['Patient_OCDSeverity'];
 $Patient_SubstanceUseSeverity = $obj['Patient_SubstanceUseSeverity'];
 $Patient_ADHDSeverity = $obj['Patient_ADHDSeverity'];
 $Patient_BipolarSeverity = $obj['Patient_BipolarSeverity'];
 $Patient_PTSDSeverity  = $obj['Patient_PTSDSeverity'];
 $Patient_SchizophreniaSeverity = $obj['Patient_SchizophreniaSeverity'];
 $Patient_MedicalCondition = $obj['Patient_MedicalCondition'];
 $Patient_ConditionSeverity = $obj['Patient_ConditionSeverity'];
 $Patient_TreatmentsUsed = $obj['Patient_TreatmentsUsed'];
 $Patient_DurationOfCondition  = $obj['Patient_DurationOfCondition'];
 $Patient_RegularyWearFaceMask = $obj['Patient_RegularyWearFaceMask'];
 $Patient_PublicTransportFreq = $obj['Patient_PublicTransportFreq'];
 $Patient_HandWashFreq = $obj['Patient_HandWashFreq'];
 $Patient_CloseContactFeq = $obj['Patient_CloseContactFeq'];
 $Patient_FreqUseOfDisinfectant = $obj['Patient_FreqUseOfDisinfectant'];
 $Patient_PreviouslyCovidTested = $obj['Patient_PreviouslyCovidTested'];
 $Patient_CoverWhenCoughSneezing = $obj['Patient_CoverWhenCoughSneezing'];
 $Patient_PreviouslyHadFlu = $obj['Patient_PreviouslyHadFlu'];
 
 // Creating SQL query and insert the record into MySQL database table.
 $Sql_Query = "insert into Patient_Details (Patient_ID,Practitioner_ID,Patient_Details_Date, Patient_Fist_Name, Patient_Last_Name , Patient_DOB , 
 Patient_Gender , Patient_Contact_Number , Patient_Address , Patient_Pregnant, Patient_Smoke , Patient_Temperature , 
 Patient_CoughSeverity , Patient_SmellLoss , Patient_ShortnessOfBreath, Patient_FatigeSeverity, Patient_DrowsynessSeverity , 
 Patient_MuscleAcheSeverity , Patient_HeadAcheSeverity , Patient_SoreThroat, Patient_RunnyNose , Patient_TasteLoss , Patient_AnxietySeverity , 
 Patient_DepressionSeverity, Patient_OCDSeverity , Patient_SubstanceUseSeverity , Patient_ADHDSeverity , Patient_BipolarSeverity, Patient_PTSDSeverity, 
 Patient_SchizophreniaSeverity , Patient_MedicalCondition , Patient_ConditionSeverity, Patient_TreatmentsUsed , Patient_DurationOfCondition, 
 Patient_RegularyWearFaceMask , Patient_PublicTransportFreq , Patient_HandWashFreq , Patient_CloseContactFeq , Patient_FreqUseOfDisinfectant , 
 Patient_PreviouslyCovidTested , Patient_CoverWhenCoughSneezing,Patient_PreviouslyHadFlu) 
values ('$Patient_ID','$Practitioner_ID','$Patient_Details_Date', '$Patient_Fist_Name', '$Patient_Last_Name' , '$Patient_DOB' , 
'$Patient_Gender' , '$Patient_Contact_Number' , '$Patient_Address' , '$Patient_Pregnant', '$Patient_Smoke' , '$Patient_Temperature' , 
'$Patient_CoughSeverity' , '$Patient_SmellLoss' , '$Patient_ShortnessOfBreath', '$Patient_FatigeSeverity', '$Patient_DrowsynessSeverity' , 
'$Patient_MuscleAcheSeverity' , '$Patient_HeadAcheSeverity' , '$Patient_SoreThroat', '$Patient_RunnyNose' , '$Patient_TasteLoss' , '$Patient_AnxietySeverity' , 
'$Patient_DepressionSeverity', '$Patient_OCDSeverity' , '$Patient_SubstanceUseSeverity' , '$Patient_ADHDSeverity' , '$Patient_BipolarSeverity', '$Patient_PTSDSeverity', 
'$Patient_SchizophreniaSeverity' , '$Patient_MedicalCondition' , '$Patient_ConditionSeverity', '$Patient_TreatmentsUsed' , '$Patient_DurationOfCondition', 
'$Patient_RegularyWearFaceMask' , '$Patient_PublicTransportFreq' , '$Patient_HandWashFreq' , '$Patient_CloseContactFeq' , '$Patient_FreqUseOfDisinfectant' , 
'$Patient_PreviouslyCovidTested' , '$Patient_CoverWhenCoughSneezing','$Patient_PreviouslyHadFlu)";
 
 
 if(mysqli_query($con,$Sql_Query)){
 
 // If the record inserted successfully then show the message.
$MSG = 'Record Successfully Inserted Into MySQL Database.' ;
 
// Converting the message into JSON format.
$json = json_encode($MSG);
 
// Echo the message.
 echo $json ;
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>
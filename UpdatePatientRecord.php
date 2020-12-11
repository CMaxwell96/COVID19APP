
<?php
 
 // Importing DBConfig.php file.
 include 'DBConfig.php';
  
 // Connecting to MySQL Database.
  $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
  
  // Getting the received JSON into $json variable.
  $json = file_get_contents('php://input');
  
  // decoding the received JSON and store into $obj variable.
  $obj = json_decode($json,true);
  
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
 $Sql_Query = "UPDATE Patient_Details SET Patient_ID = '$Patient_ID' ,Practitioner_ID = '$Practitioner_ID',Patient_Details_Date='$Patient_Details_Date' , Patient_Fist_Name= '$Patient_Fist_Name', Patient_Last_Name= '$Patient_Last_Name', 
 Patient_DOB= '$Patient_DOB' , Patient_Gender= '$Patient_Gender' , Patient_Contact_Number = '$Patient_Contact_Number' , Patient_Address= '$Patient_Address' , Patient_Pregnant='$Patient_Pregnant' , Patient_Smoke='$Patient_Smoke' , 
 Patient_Temperature = '$Patient_Temperature', Patient_CoughSeverity= '$Patient_CoughSeverity' , Patient_SmellLoss = '$Patient_SmellLoss', Patient_ShortnessOfBreath= '$Patient_ShortnessOfBreath', 
 Patient_FatigeSeverity= '$Patient_FatigeSeverity', Patient_DrowsynessSeverity = '$Patient_DrowsynessSeverity' , Patient_MuscleAcheSeverity= '$Patient_MuscleAcheSeverity' , Patient_HeadAcheSeverity = '$Patient_HeadAcheSeverity', 
 Patient_SoreThroat= '$Patient_SoreThroat', Patient_RunnyNose= '$Patient_RunnyNose' , Patient_TasteLoss= '$Patient_TasteLoss' , Patient_AnxietySeverity= '$Patient_AnxietySeverity' , 
 Patient_DepressionSeverity= '$Patient_DepressionSeverity', Patient_OCDSeverity= '$Patient_OCDSeverity' , Patient_SubstanceUseSeverity= '$Patient_SubstanceUseSeverity' , Patient_ADHDSeverity='$Patient_ADHDSeverity'  , 
 Patient_BipolarSeverity= '$Patient_BipolarSeverity', Patient_PTSDSeverity='$Patient_PTSDSeverity' ,  Patient_SchizophreniaSeverity= '$Patient_SchizophreniaSeverity' , Patient_MedicalCondition ='$Patient_MedicalCondition' , 
 Patient_ConditionSeverity= '$Patient_ConditionSeverity', Patient_TreatmentsUsed= '$Patient_TreatmentsUsed' , Patient_DurationOfCondition= '$Patient_DurationOfCondition', Patient_RegularyWearFaceMask= '$Patient_RegularyWearFaceMask' , 
 Patient_PublicTransportFreq= '$Patient_PublicTransportFreq' , 
 Patient_HandWashFreq = '$Patient_HandWashFreq' , Patient_CloseContactFeq= '$Patient_CloseContactFeq' , Patient_FreqUseOfDisinfectant= '$Patient_FreqUseOfDisinfectant' , Patient_PreviouslyCovidTested= '$Patient_PreviouslyCovidTested' , 
 Patient_CoverWhenCoughSneezing='$Patient_CoverWhenCoughSneezing' ,Patient_PreviouslyHadFlu= '$Patient_PreviouslyHadFlu' WHERE Patient_ID = $S_ID";


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
 1
 2
 3
 4
 5
 6
 7
 8
 9
 10
 11
 12
 13
 14
 15
 16
 17
 18
 19
 20
 21
 22
 23
 24
 25
 26
 27
 28
 29
 30
 31
 32
 33
 34
 35
 36
 37
 38
 39
 40
 41
 42
 43
 44
 45
 46
 47
 48
 49
 50
 51
 <?php
  
 // Importing DBConfig.php file.
 include 'DBConfig.php';
  
 // Connecting to MySQL Database.
  $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
  
  // Getting the received JSON into $json variable.
  $json = file_get_contents('php://input');
  
  // decoding the received JSON and store into $obj variable.
  $obj = json_decode($json,true);
  
  // Populate Student ID from JSON $obj array and store into $S_Name.
  $S_ID = $obj['student_id'];
  
  // Populate Student name from JSON $obj array and store into $S_Name.
  $S_Name = $obj['student_name'];
  
  // Populate Student Class from JSON $obj array and store into $S_Class.
  $S_Class = $obj['student_class'];
  
  // Populate Student Phone Number from JSON $obj array and store into $S_Phone_Number.
  $S_Phone_Number = $obj['student_phone_number'];
  
  // Populate Email from JSON $obj array and store into $S_Email.
  $S_Email = $obj['student_email'];
  
  // Creating SQL query and insert the record into MySQL database table.
  $Sql_Query = "UPDATE StudentDetailsTable SET student_name= '$S_Name', student_class = '$S_Class', student_phone_number = '$S_Phone_Number', student_email = '$S_Email' WHERE student_id = $S_ID";
  
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
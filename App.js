
import React, { Component } from 'react';
import { AppRegistry, StyleSheet, TextInput, View, Alert, Button, Text, Image } from 'react-native';
// Importing Stack Navigator library to add multiple activities.
import { StackNavigator } from 'react-navigation';

AppRegistry.registerComponent(COVID19APP, () => App);

class MainActivity extends Component {

  static navigationOptions =
  {
     title: 'MainActivity',
  };

constructor(props) {

   super(props)

   this.state = {

     TextInput_Patient_ID: '',
     TextInput_Practitioner_ID: '',
     TextInput_Patient_Details_Date: '',
     TextInput_Patient_Fist_Name: '',
     TextInput_Patient_Last_Name: '',
     TextInput_Patient_DOB: '',
     TextInput_Patient_Gender: '',
     TextInput_Patient_Contact_Number: '',
     TextInput_Patient_Address: '',
     TextInput_Patient_Pregnant: '',
     TextInput_Patient_Smoke: '',
     TextInput_Patient_Temperature: '',
     TextInput_Patient_CoughSeverity: '',
     TextInput_Patient_SmellLoss: '',
     TextInput_Patient_ShortnessOfBreath: '',
     TextInput_Patient_FatigeSeverity: '',
     TextInput_Patient_DrowsynessSeverity: '',
     TextInput_Patient_MuscleAcheSeverity: '',
     TextInput_Patient_HeadAcheSeverity: '',
     TextInput_Patient_SoreThroat: '',
     TextInput_Patient_RunnyNose: '',
     TextInput_Patient_TasteLoss: '',
     TextInput_Patient_AnxietySeverity: '',
     TextInput_Patient_DepressionSeverity: '',
     TextInput_Patient_OCDSeverity: '',
     TextInput_Patient_ADHDSeverity: '',
     TextInput_Patient_BipolarSeverity: '',
     TextInput_Patient_PTSDSeverity: '',
     TextInput_Patient_SchizophreniaSeverity: '',
     TextInput_Patient_MedicalCondition: '',
     TextInput_Patient_ConditionSeverity: '',
     TextInput_Patient_TreatmentsUsed: '',
     TextInput_Patient_DurationOfCondition: '',
     TextInput_Patient_RegularyWearFaceMask: '',
     TextInput_Patient_PublicTransportFreq: '',
     TextInput_Patient_HandWashFreq: '',
     TextInput_Patient_FreqUseOfDisinfectant: '',
     TextInput_Patient_PreviouslyCovidTested: '',
     TextInput_Patient_CoverWhenCoughSneezing: '',
     TextInput_Patient_CloseContactFeq: '',
     TextInput_Patient_Patient_PreviouslyHadFlu: ''

   }

 }

 InsertStudentRecordsToServer = () =>{

      fetch('https://reactnativecode.000webhostapp.com/Patient/InsertPatientDetails.php', {
      method: 'POST',
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({

        TextInput_Patient_ID: '',
     TextInput_Practitioner_ID: '',
     TextInput_Patient_Details_Date: '',
     TextInput_Patient_Fist_Name: '',
     TextInput_Patient_Last_Name: '',
     TextInput_Patient_DOB: '',
     TextInput_Patient_Gender: '',
     TextInput_Patient_Contact_Number: '',
     TextInput_Patient_Address: '',
     TextInput_Patient_Pregnant: '',
     TextInput_Patient_Smoke: '',
     TextInput_Patient_Temperature: '',
     TextInput_Patient_CoughSeverity: '',
     TextInput_Patient_SmellLoss: '',
     TextInput_Patient_ShortnessOfBreath: '',
     TextInput_Patient_FatigeSeverity: '',
     TextInput_Patient_DrowsynessSeverity: '',
     TextInput_Patient_MuscleAcheSeverity: '',
     TextInput_Patient_HeadAcheSeverity: '',
     TextInput_Patient_SoreThroat: '',
     TextInput_Patient_RunnyNose: '',
     TextInput_Patient_TasteLoss: '',
     TextInput_Patient_AnxietySeverity: '',
     TextInput_Patient_DepressionSeverity: '',
     TextInput_Patient_OCDSeverity: '',
     TextInput_Patient_ADHDSeverity: '',
     TextInput_Patient_BipolarSeverity: '',
     TextInput_Patient_PTSDSeverity: '',
     TextInput_Patient_SchizophreniaSeverity: '',
     TextInput_Patient_MedicalCondition: '',
     TextInput_Patient_ConditionSeverity: '',
     TextInput_Patient_TreatmentsUsed: '',
     TextInput_Patient_DurationOfCondition: '',
     TextInput_Patient_RegularyWearFaceMask: '',
     TextInput_Patient_PublicTransportFreq: '',
     TextInput_Patient_HandWashFreq: '',
     TextInput_Patient_FreqUseOfDisinfectant: '',
     TextInput_Patient_PreviouslyCovidTested: '',
     TextInput_Patient_CoverWhenCoughSneezing: '',
     TextInput_Patient_CloseContactFeq: '',
     TextInput_Patient_Patient_PreviouslyHadFlu: '',

     Patient_ID : this.state.TextInput_Patient_ID,

       

      })

      }).then((response) => response.json())
          .then((responseJson) => {

            // Showing response message coming from server after inserting records.
            Alert.alert(responseJson);

          }).catch((error) => {
            console.error(error);
          });

}

 GoTo_Show_PatientList_Activity_Function = () =>
  {
    this.props.navigation.navigate('Second');
    
  }
}

//class LoginActivity extends Component {
  // Setting up Login Activity title.
  //static navigationOptions =
    //{
      //title: 'LoginActivity',
    //};
  //constructor(props) {
    //super(props)
    //this.state = {
    //UserEmail: '',
    //UserPassword: ''
    //}
  //}

 // export default MainProject = StackNavigator(
   // {
     // First: { screen: LoginActivity },
  
      //Second: { screen: PatientList_Activity }
  
    //});

    


  

 
 
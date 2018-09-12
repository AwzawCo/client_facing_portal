<?php

//$form = $body->result_array();
//var_dump($body);
//$myRental = implode("\n", $body);
// foreach ($body as $row){
//         echo $row['repFirstName']. "\n";
// }
//echo $myRental;



foreach ($body as $row){
        echo "-/-/\n" .$row['quoteID'] . "-/-/\n";              //0
        echo $row['bidID'] . "-/-/\n";
        echo $row['repFirstName'] . "-/-/\n";
        echo $row['repLastName'] . "-/-/\n";
        echo $row['repPhone'] . "-/-/\n";                       
        echo $row['repEmail'] . "-/-/\n";                       //5
        echo $row['supplierProperty'] . "-/-/\n";
        echo $row['bWComProperties'] . "-/-/\n";
        echo $row['coreInventory'] . "-/-/\n";
        echo $row['propertyName'] . "-/-/\n";                   
        echo $row['propertyUrl'] . "-/-/\n";                    //10
        echo $row['propertyAddress'] . "-/-/\n";
        echo $row['propertyAddress2'] . "-/-/\n";
        echo $row['propertyCity'] . "-/-/\n";
        echo $row['propertyState'] . "-/-/\n";                  
        echo $row['propertyZip'] . "-/-/\n";                    //15
        echo $row['propertyCountry'] . "-/-/\n";
        echo $row['highSpeedInternet'] . "-/-/\n";
        echo $row['airConditioning'] . "-/-/\n";
        echo $row['housekeeping'] . "-/-/\n";                   
        echo $row['localPhone'] . "-/-/\n";                     //20
        echo $row['carParking'] . "-/-/\n";
        echo $row['petFee'] . "-/-/\n";
        echo $row['refundables'] . "-/-/\n";
        echo $row['petPayTypes'] . "-/-/\n";                    
        echo $row['parkings'] . "-/-/\n";                       //25
        echo $row['washerDryer'] . "-/-/\n";
        echo $row['internet'] . "-/-/\n";
        echo $row['bathrooms'] . "-/-/\n";
        echo $row['dateAvailable'] . "-/-/\n";                  
        echo $row['quoteValidType'] . "-/-/\n";                 //30
        echo $row['budgetTypeID'] . "-/-/\n";
        echo $row['distance'] . "-/-/\n";
        echo $row['parking'] . "-/-/\n";
        echo $row['currency'] . "-/-/\n";                       
        echo $row['tax'] . "-/-/\n";                            //35
        echo $row['numStudios'] . "-/-/\n";
        echo $row['rate0'] . "-/-/\n";
        echo $row['discount0'] . "-/-/\n";
        echo $row['num1Bedrooms'] . "-/-/\n";                   
        echo $row['rate1'] . "-/-/\n";                          //40
        echo $row['discount1'] . "-/-/\n";
        echo $row['num2Bedrooms'] . "-/-/\n";
        echo $row['rate2'] . "-/-/\n";
        echo $row['discount2'] . "-/-/\n";                      
        echo $row['num3Bedrooms'] . "-/-/\n";                   //45
        echo $row['rate3'] . "-/-/\n";
        echo $row['discount3'] . "-/-/\n";
        echo $row['leaseTerm'] . "-/-/\n";
        echo $row['noticeTerm'] . "-/-/\n";                     
        echo $row['advancedDays'] . "-/-/\n";                   //50
        echo $row['advancedHours'] . "-/-/\n";
        echo $row['commissionTypeID'] . "-/-/\n";
        echo $row['commissionPercent'] . "-/-/\n";
        echo $row['VATID'] . "-/-/\n";                          
        echo $row['squareFootage'] . "-/-/\n";                  //55
        echo $row['reduction30Days'] . "-/-/\n";
        echo $row['reduction30DaysComment'] . "-/-/\n";
        echo $row['canBeSplit'] . "-/-/\n";
        echo $row['comment'] . "-/-/\n";                        
        echo $row['24 Hour Reception'] . "-/-/\n";               //60          
        echo $row['Airport Transportation'] . "-/-/\n";                        
        echo $row['Keys mailed to guest prior to arrival'] . "-/-/\n";                        
        echo $row['Lift Access'] . "-/-/\n";                        
        echo $row['Meet and Greet'] . "-/-/\n";                        
        echo $row['Satellite/Cable TV'] . "-/-/\n";                  //65
        echo $row['Pet Friendly'] . "-/-/\n";                        //59
        echo $row['Background Check'] . "-/-/\n";                        //59



       
    
}

?>
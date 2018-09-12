<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$query = $this->db->query('SELECT * FROM SubmittedQuotes WHERE propertyAddress = "1725 Ocean Front walk" ');

echo '<table class="data-table"><tr class="data-heading">';

foreach ($query->result_array() as $row)
{		echo "<tr>";
        echo "\n" .'<td>' .$row['quoteID']. '</td>'. "\n";
        echo '<td>' .$row['bidID']. '</td>'. "\n";
        echo '<td>' .$row['repFirstName']. '</td>'. "\n";
        echo '<td>' .$row['repLastName']. '</td>'. "\n";
        echo '<td>' .$row['repPhone']. '</td>'. "\n";
        echo '<td>' .$row['repEmail']. '</td>'. "\n";
        echo '<td>' .$row['supplierProperty']. '</td>'. "\n";
        echo '<td>' .$row['bWComProperties']. '</td>'. "\n";
        echo '<td>' .$row['coreInventory']. '</td>'. "\n";
        echo '<td>' .$row['propertyName']. '</td>'. "\n";
        echo '<td>' .$row['propertyUrl']. '</td>'. "\n";
        echo '<td>' .$row['propertyAddress']. '</td>'. "\n";
        echo '<td>' .$row['propertyAddress2']. '</td>'. "\n";
        echo '<td>' .$row['propertyCity']. '</td>'. "\n";
        echo '<td>' .$row['propertyState']. '</td>'. "\n";
        echo '<td>' .$row['propertyZip']. '</td>'. "\n";
        echo '<td>' .$row['propertyCountry']. '</td>'. "\n";
        echo '<td>' .$row['highSpeedInternet']. '</td>'. "\n";
        echo '<td>' .$row['airConditioning']. '</td>'. "\n";
        echo '<td>' .$row['housekeeping']. '</td>'. "\n";
        echo '<td>' .$row['localPhone']. '</td>'. "\n";
        echo '<td>' .$row['carParking']. '</td>'. "\n";
        echo '<td>' .$row['petFee']. '</td>'. "\n";
        echo '<td>' .$row['refundables']. '</td>'. "\n";
        echo '<td>' .$row['petPayTypes']. '</td>'. "\n";
        echo '<td>' .$row['parkings']. '</td>'. "\n";
        echo '<td>' .$row['washerDryer']. '</td>'. "\n";
        echo '<td>' .$row['internet']. '</td>'. "\n";
        echo '<td>' .$row['bathrooms']. '</td>'. "\n";
        echo '<td>' .$row['dateAvailable']. '</td>'. "\n";
        echo '<td>' .$row['quoteValidType']. '</td>'. "\n";
        echo '<td>' .$row['budgetTypeID']. '</td>'. "\n";
        echo '<td>' .$row['distance']. '</td>'. "\n";
        echo '<td>' .$row['parking']. '</td>'. "\n";
        echo '<td>' .$row['currency']. '</td>'. "\n";
        echo '<td>' .$row['tax']. '</td>'. "\n";
        echo '<td>' .$row['numStudios']. '</td>'. "\n";
        echo '<td>' .$row['rate0']. '</td>'. "\n";
        echo '<td>' .$row['discount0']. '</td>'. "\n";
        echo '<td>' .$row['rate1']. '</td>'. "\n";
        echo '<td>' .$row['discount1']. '</td>'. "\n";
        echo '<td>' .$row['num2Bedrooms']. '</td>'. "\n";
        echo '<td>' .$row['rate2']. '</td>'. "\n";
        echo '<td>' .$row['discount2']. '</td>'. "\n";
        echo '<td>' .$row['num3Bedrooms']. '</td>'. "\n";
        echo '<td>' .$row['rate3']. '</td>'. "\n";
        echo '<td>' .$row['discount3']. '</td>'. "\n";
        echo '<td>' .$row['leaseTerm']. '</td>'. "\n";
        echo '<td>' .$row['noticeTerm']. '</td>'. "\n";
        echo '<td>' .$row['advancedDays']. '</td>'. "\n";
        echo '<td>' .$row['advancedHours']. '</td>'. "\n";
        echo '<td>' .$row['commissionTypeID']. '</td>'. "\n";
        echo '<td>' .$row['commissionPercent']. '</td>'. "\n";
        echo '<td>' .$row['VATID']. '</td>'. "\n";
        echo '<td>' .$row['squareFootage']. '</td>'. "\n";
        echo '<td>' .$row['reduction30Days']. '</td>'. "\n";
        echo '<td>' .$row['reduction30DaysComment']. '</td>'. "\n";
        echo '<td>' .$row['canBeSplit']. '</td>'. "\n";
        echo '<td>' .$row['comment']. '</td>'. "\n";


        echo "</tr>";
       
    
}
echo "</table>";

?>
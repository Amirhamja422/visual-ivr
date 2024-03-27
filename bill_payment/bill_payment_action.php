<?php

include 'libs/database.php';
include 'libs/functions.php';

$bill_number = $_POST['bill_number'];
    $resultdata = mysql_num_rows(mysql_query("SELECT * FROM bill_payment  WHERE bill_no ='".$bill_number."'"));
 if ($resultdata) {
 	 header("location:bill_payment_details.php");
    } else {
        echo "Invalid Bill Number";
    }


        
    
?>
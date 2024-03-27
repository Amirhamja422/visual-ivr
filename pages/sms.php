<?php
$customer_ph = $_REQUEST['customer_ph'];
$sms_massage = $_REQUEST['sms_massage'];
	//echo $customer_ph."--".$sms_massage;

$username = "kiron1985";
$password = "kiron@123";
	//$mobiles = '8801740979517';
$mobiles = '88'.$customer_ph;
	//$sms = 'Thank you for your kind purchase. For any query, please contact our hotline number: 01969604444.';
$sms = $sms_massage;
$originator = '01844016400';
	// http://clients.muthofun.com:8901/esmsgw/sendsms.jsp?user=kiron1985&password=kiron@123&mobiles=01675342612&sms=Test Message&unicode=1

	// echo sendSMS($username, $password, $mobiles, $sms, $originator);

function sendURL($phone, $url)
{	


	$url = "http://clients.muthofun.com:8901/esmsgw/sendsms.jsp?user=kiron1985&password=Kiron@123&mobiles=".$phone."&sms=".$url."&unicode=1";			

	$c = curl_init(); 
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($c, CURLOPT_URL, $url); 
	$response = curl_exec($c); 
	return $response;
}

function sendOTP($phone,$msg,$otp){

	// $url = "http://clients.muthofun.com:8901/esmsgw/sendsms.jsp?user=kiron1985&password=Kiron@123&mobiles=".$phone."&sms=".urlencode($msg)."&unicode=1";
	// $c = curl_init(); 
	// curl_setopt($c, CURLOPT_RETURNTRANSFER, 1); 
	// curl_setopt($c, CURLOPT_URL, $url); 
	// $response = curl_exec($c);
	

	$sender_id = '8809612442054';
	$api_key = 'C2001311623a002115e230.92836630';
	$sms_url = "http://sms.viatech.com.bd/smsapi?api_key=".$api_key."&type=text&contacts=".$phone."&senderid=".$sender_id."&msg=".urlencode($msg);
		
	$c = curl_init(); 
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($c, CURLOPT_URL, $sms_url); 
	$response = curl_exec($c); 

	if($response === false)
	{
		echo 'Curl error: ' . curl_error($ch);
	}else{
		return $response;
	}
}

?>
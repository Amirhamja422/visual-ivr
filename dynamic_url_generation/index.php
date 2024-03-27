<?php
require_once('connection.php');
function validatePhone($number) {
	$number=preg_replace('/\D/', '',  $number);    						//  Deleting Non Numeric Characters
	if(substr($number, 0, 1) == "+" ) $number=substr($number, 1);		//  Deleting + if in First Position
	if(substr($number, 0, 2) == "88") $number=substr($number, 2);		//  Deleting 8 if in First Two Position
	if(substr($number, 0, 2) == "00") $number=substr($number, 2);		//  Deleting 0 if in First Two Position
	if(strlen($number)<=5 || strlen($number)>11) return "NO";
	else return $number;
}


function sendURL($phone, $url){	

	$sender_id = '8809612442054';
	$api_key = 'C2001311623a002115e230.92836630';
	$sms_url = "http://sms.viatech.com.bd/smsapi?api_key=".$api_key."&type=text&contacts=".$phone."&senderid=".$sender_id."&msg=".$url;
		
	$c = curl_init(); 
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($c, CURLOPT_URL, $sms_url); 
	$response = curl_exec($c); 
	return $response;
}


function generate_token($length = 10) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
$data = json_decode(file_get_contents("php://input"));

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	$allHeaders = getallheaders();	
	if ($allHeaders['Content-Type'] == 'application/json') {		
		if(!empty($data->phone_number)){
			$phone = validatePhone($data->phone_number);		
			$token = generate_token();
			// echo $data->phone_number;		
			//$url = "http://116.193.217.4:9091/sgGGJCJhjhHGHG/abdX.php?token=".$token;
			$url = "http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=".$token;
			$message_content = "Your VIVR access link is $url valid for 5 min. Regards Sonali Intellect";
			//echo json_encode(array('message' => $message_content));
			$now_time = date("Y-m-d H:i:s");
			$add_time = strtotime("+15 minutes", strtotime($now_time));
			$add_time = date('Y-m-d H:i:s', $add_time);
			
			$sql_check = "SELECT * FROM `url` WHERE `phone_number`='".$phone."' ORDER BY ID DESC LIMIT 1";
			$qry_check = mysqli_query($conn,$sql_check);
			$rowcount=mysqli_num_rows($qry_check);
			if($rowcount>0){
				$data_check = mysqli_fetch_assoc($qry_check);
				$update_id = $data_check['id'];
				$action_qry = "UPDATE `url` SET `url` = '$url', `token` = '$token', `status` = 'non_expire', `created_at` = '$now_time', `valid_upto` = '$add_time' WHERE `id` = '$update_id'";
			} else {
				$action_qry   = "INSERT INTO `url`(`url`, `phone_number`, `token`, `status`, `valid_upto`) VALUES ('$url', '$phone', '$token', 'non_expire', '$add_time')";
			}
			$result = mysqli_query($conn,$action_qry);
			if ($result) {
				$sms_result = sendURL($phone, $url);
				echo json_encode(array('message' => $sms_result));
			}else{
				echo mysqli_error($conn);
			}
		}else{
			echo json_encode(array('message' => '204 No phone number Not Allowed'));
		}
	}else{
		echo json_encode(array('message' => 'Content Type Not Allowed'));
	}
}else{
	echo json_encode(array('message' => '405 Method Not Allowed'));
}
?>
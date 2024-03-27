 <?php
$phone = $_GET['phoneNumber'];
if($phone!=''){
	$url = "http://103.204.81.67/visual-ivr-sonali/dynamic_url_generation/index.php";
	$data = array("phone_number" => "$phone");
	$data_string = json_encode($data);

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/json',
	'Content-Length: ' . strlen($data_string))
	);
	$result = curl_exec($ch);
	echo $result;
} else {
	echo "No Phone number found";
}

	
?>
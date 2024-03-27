<?php
include '../libs/db.php';
include 'sms.php';
if (isset($_POST['card_number']) && isset($_POST['tpin'])) {
	$card_number =$_POST['card_number'];
	$tpin =$_POST ['tpin'];
	$sql = "SELECT * FROM `card_info` WHERE `card_number`='".$card_number."' AND `tpin`='".$tpin."'";

	$data = mysqli_fetch_assoc(mysqli_query($con,$sql));
	if($data){
		$card_number = $data['card_number'];
		$phone   = $data['mobileNumber'];
		$otp     = substr(number_format(time() * rand(),0,'',''),0,6);
		$msg     = "Your IVR Card OTP is ".$otp.".OTP validity for 5 min.Regards iHelpBD";
		$otpsql  = "INSERT INTO `otp`(`card_number`,`phone_number`,`otp`,`status`) VALUES ('$card_number','$phone','$otp','valid')";
		$result = mysqli_query($con,$otpsql);
		if ($result) {
			echo sendOTP($phone,$msg,$otp);
		}
	}
	else{
		echo 'not_match';
	}
}

if (isset($_POST['card_no']) && isset($_POST['credit_otp'])) {
 	$card_no     = $_POST['card_no'];
	$credit_otp  = $_POST['credit_otp'];
	$sql = "SELECT * FROM `otp` WHERE `card_number` ='$card_no' AND `otp`='$credit_otp' AND `status` ='valid' ORDER BY `id` DESC LIMIT 1";
	$result = mysqli_num_rows(mysqli_query($con,$sql));
	if ($result > 0) {
		echo 'success';
	}else{
		echo 'failed';
	}
}
?>


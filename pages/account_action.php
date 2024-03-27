<?php
include '../libs/db.php';
include 'sms.php';

if (isset($_POST['acount_no']) && isset($_POST['tpin'])) {

	$acount_no =$_POST['acount_no'];
	$tpin =$_POST ['tpin'];
	$sql = "SELECT * FROM `account_info` WHERE `account_number`='".$acount_no."' AND `tpin`='".$tpin."'";
	$data = mysqli_fetch_assoc(mysqli_query($con,$sql));
	if($data){
		echo "success";
		/*$account = $data['account_number'];
		$phone   = $data['phone'];
		$otp     = substr(number_format(time() * rand(),0,'',''),0,6);
		$msg     = "Your IVR A/C OTP is ".$otp.".OTP validity for 5 min.Regards iHelpBD";
		$otpsql  = "INSERT INTO `otp`(`account_number`, `phone_number`, `otp`,`status`) VALUES ('$account','$phone','$otp','valid')";
		$result = mysqli_query($con,$otpsql);
		if ($result) {
 		echo sendOTP($phone,$msg,$otp);
		}*/
	}
	else{
		echo "not_match";
	}
}

if (isset($_POST['account_otp'])) {
	$otp     = $_POST['account_otp'];
	$account = $_POST['account_no'];
	$sql = "SELECT * FROM `otp` WHERE `account_number` ='$account' AND `otp`='$otp' AND `status` ='valid' ORDER BY `id` DESC LIMIT 1";
	$result = mysqli_num_rows(mysqli_query($con,$sql));
	if ($result > 0) {
		echo 'success';
	}else{
		echo 'failed';
	}
}


if (isset($_POST['start_date']) && isset($_POST['end_date'])) {
	$from    = $_POST['start_date'];
	$to      = $_POST['end_date'];
	$account = $_POST['account_no'];
	$sql= "INSERT INTO `statement_request`(`account_no`, `start_date`, `end_date`) VALUES ('$account','$from','$to')";
	$result = mysqli_query($con,$sql);

	if ($result > 0) {
		echo 'success';
	}else{
		echo 'failed';
	}
}


if (isset($_POST['old_tpin']) && isset($_POST['new_tpin']) ) {
	$old_tpin     = $_POST['old_tpin'];
	$new_tpin     = $_POST['new_tpin'];
	$account_no   = $_POST['account_no'];
	$sql= "SELECT * FROM `account_info` WHERE `tpin`='".$old_tpin."' AND `account_number` = '".$account_no."'";
	$result = mysqli_num_rows(mysqli_query($con,$sql));

	if ($result > 0) {
		$status = mysqli_query($con,"UPDATE `account_info` SET `tpin`='$new_tpin' WHERE `account_number`='$account_no'");
		if ($status) {
			echo 'success';
		}else{
			echo 'failed';
		}
	}else{
		echo 'failed';
	}

}

if (isset($_POST['name']) && isset($_POST['profession'])) {
	$name         = $_POST['name'];
	$account_type = $_POST['account_type'];
	$profession   = $_POST['profession'];
	$img          = $_FILES['img']['name'];

	$path="../img/uploads/".$img;
	move_uploaded_file($_FILES['img']['tmp_name'], $path);

	$contact      = $_POST['contact'];
	$income       = $_POST['income'];
	$nid_no       = $_POST['nid_no'];
	$nid          = $_FILES['nid']['name'];
	$path1="../img/uploads/".$nid;
	move_uploaded_file($_FILES['nid']['tmp_name'], $path1);

	$sql = "INSERT INTO `account_request`(`account_name`, `account_type`, `profession`, `account_holder_img`, `contact`, `income`, `nid`, `account_holder_nid_copy`) VALUES ('$name','$account_type','$profession','$img','$contact','$income','$nid_no','$nid')";
	$result = mysqli_query($con,$sql);

	if ($result) {
		echo 'success';
	}else{
		echo 'failed';
	}	
}
?>
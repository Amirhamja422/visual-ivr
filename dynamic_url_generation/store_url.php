<?php
require_once('connection.php');
require_once('../pages/sms.php');
if (isset($_POST['url']) && isset($_POST['token']) && isset($_POST['phone_number'])) {

	$token = $_POST['token'];
	$url   = $_POST['url'];
	$phone = $_POST['phone_number'];

	$sql   = "INSERT INTO `url`(`url`, `phone_number`, `token`, `status`) VALUES ('$url','$phone','$token','non_expire')";
	$result = mysqli_query($conn,$sql);
	if ($result) {
		echo sendURL($phone,$url);
	}else{
		echo mysqli_error($conn);
	}
}
?>
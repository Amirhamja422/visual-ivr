<?php
require_once('connection.php');
if (isset($_GET['token'])) {
	$token =$_GET['token'];
	$sql = "SELECT * FROM `url` WHERE `token` = '$token' AND `status` = 'non_expire'";
	$result = mysqli_query($conn,$sql);
	if ($result) {
		if ($row = mysqli_fetch_row($result) > 0 ) {
			header("Location: http://localhost/dynamic_url_generation/");
		}else{
			echo "URL Expired";
		}
	}else{
		echo mysqli_error($conn);
	}
}
?>
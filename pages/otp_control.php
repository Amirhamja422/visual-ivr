<?php
include '../libs/db.php';

$now = strtotime(date('Y-m-d H:i:s'));
$sql = "SELECT * FROM `otp` WHERE `status` = 'valid'";
$result = mysqli_query($con,$sql);
$count = mysqli_fetch_row($result);
if( $count > 0){
	$result1 = mysqli_query($con,"SELECT * FROM `otp` WHERE `status` = 'valid'");
	while ($row = mysqli_fetch_assoc($result1)) {
		$created_at = strtotime($row['created_at']);
		$differrace = $now - $created_at;
		$interval  = 300;
		if ( $differrace > $interval) {
			$result2 = mysqli_query($con ,"UPDATE `otp` SET `status`='Invalid' WHERE `id` = '".$row['id']."'");
			if ($result2) {
				echo "otp updated successfully";
			}else{
				echo mysqli_error($con);
			}
		}else{
			echo "Nothing for update";
		}
	}
}else{
	echo "No Data";
}
?>



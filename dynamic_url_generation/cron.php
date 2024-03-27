<?php
require_once('connection.php');
$now = strtotime(date('Y-m-d H:i:s'));

$sql = "SELECT * FROM `url` WHERE `status` = 'non_expire'";
$result = mysqli_query($conn,$sql);
$count = mysqli_fetch_row($result);

if( $count > 0){
	$result1 = mysqli_query($conn,"SELECT * FROM `url` WHERE `status` = 'non_expire'");
	while ($row = mysqli_fetch_assoc($result1)) {
		$created_at = strtotime($row['created_at']);
		$differrace = $now - $created_at;
		$interval  = 300;
		if ( $differrace > $interval) {
			$result2 = mysqli_query($conn ,"UPDATE `url` SET `status`='expired' WHERE `id` = '".$row['id']."'");
			if ($result2) {
				echo "status updated successfully";
			}else{
				echo mysqli_error($conn);
			}
		}
	}
}else{
	echo " no data for update";
}
?>
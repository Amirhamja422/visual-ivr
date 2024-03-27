<?php
require_once('connection.php');
if (isset($_POST['update_token'])) {
	$now = strtotime(date('Y-m-d h:i:s'));

	$expire_at = date('Y-m-d H:i:s', strtotime('-5 minutes'));
	$sql = "SELECT * FROM `url` WHERE `status` = 'non_expire'";
	$result = mysqli_query($conn,$sql);
	$count = mysqli_fetch_row($result);

	if( $count > 0){
		$result1 = mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_assoc($result1)) {
			$create_at = strtotime($row['created_at']);
			$interval = ($create_at - $now);
			if ( $interval >= 301) {
				$result = mysqli_query($conn ,"UPDATE `url` SET `status`='expired' WHERE `id` = '".$row['id']."'");
				if ($result) {
					echo "status updated successfully";
				}else{
					echo mysqli_error($conn);
				}
			}
		}
	}else{
		echo " no data for update";
	}	
}
?>
<?php
include '../libs/db.php';
//$account = $_GET['value'];
$accountNo = $_GET['value'];
// include '../api/get-info.php';
$sql = "SELECT * FROM `account_info` WHERE `account_number`='".$accountNo."'";
$data = mysqli_fetch_assoc(mysqli_query($con,$sql));
// $arr_data = json_decode($result, true);

?>
<div class="main_body2" style="height:259px;">
	<div class="registerac_btn" style="height:61px;">
		<div class="service_btn_icon" style="width: 99%; color: #FFFFFF; height: 20px;">
			<p>Current Balance</p>
		</div>
		<div class="service_btn_right" style="width: 99%; height: 40px; font-size: 25px;">
			<input type="text" value="<?php echo $data['balance'];?>" readonly>
			<!-- <input type="button" value="<?php echo $arr_data['balance'].' '.$arr_data['currency']; ?>" readonly> -->
		</div>
	</div>	
</div>
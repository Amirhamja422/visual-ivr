<?php
$card_no = $_GET['value'];
?>
<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">	
	<div class="main_body" style="height:259px;">
		<div class="service_btn">
			<div class="service_btn_icon">
				<img src="img/serial_icon/key.png">
			</div>
			<div class="service_btn_right">
				<input type="text" id="credit_otp" name="credit_otp" placeholder="Enter 6 Digit OTP Code.">
			</div>
		</div>
		<input type="hidden" id="card_no" name="card_no" value="<?php echo $card_no;?>">
		<button type="button" id="credit_otp_submit" class="btn btn-primary">Submit</button>
	</div>
</form>

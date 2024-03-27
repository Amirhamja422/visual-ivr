<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">	
	<div class="main_body" style="height:259px;">
		<div class="service_btn">
			<div class="service_btn_icon">
				<img src="img/serial_icon/key.png">
			</div>
			<div class="service_btn_right">
				<input type="text" id="account_otp" name="account_otp" placeholder="Enter 6 Digit OTP Code.">
			</div>			
		</div>
		<input type="hidden" id="account_no" name="account_no" value="<?php echo $_GET['value'];?>">
		<button type="button" id="account_otp_submit" class="btn btn-primary">Submit</button>
	</div>
</form>

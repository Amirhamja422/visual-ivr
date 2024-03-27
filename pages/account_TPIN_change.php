<?php
$account_no = $_GET['value'];
?>
<div class="main_body" style="height:259px;">
	<div class="service_btn">
		<div class="service_btn_icon">
			<img src="img/account_services.png" onclick="playAudio()">
		</div>
		<div class="service_btn_right">
			<input type="text" id="old_tpin" name="old_tpin" placeholder="Old TPIN">
		</div>
	</div>
	<div class="service_btn">
		<div class="service_btn_icon">
			<img src="img/account_services.png" onclick="playAudio()">
		</div>
		<div class="service_btn_right">
			<input type="text" id="new_tpin" name="new_tpin" placeholder="New TPIN">
		</div>
	</div>
	<div class="service_btn">
		<div class="service_btn_icon">
			<img src="img/account_services.png">
		</div>
		<div class="service_btn_right">
			<input type="date" id="dob" name="dob" placeholder="Date of Birth">
		</div>
	</div>
	<input type="hidden" id="account_no" name="account_no" value="<?php echo $account_no;?>">			
	<button type="button" id="tpinchange_request" style="height: 29px;margin-top: 8px;">Submit</button>
</div>
	
<script type="text/javascript">
	$(document).ready(function(){		
		playAudio();
	});
</script>
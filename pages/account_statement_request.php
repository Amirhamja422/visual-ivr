<div class="main_body" style="height:259px;">
	<div class="service_btn">
		<div class="service_btn_icon">
			<img src="img/account_services.png" onclick="playAudio()">
		</div>
		<div class="service_btn_right">
			<input type="date" id="start_date" name="start_date" placeholder="Start Stae">
		</div>
	</div>
	<div class="service_btn">
		<div class="service_btn_icon">
			<img src="img/account_services.png">
		</div>
		<div class="service_btn_right">
			<input type="date" id="end_date" name="end_date" placeholder="End Date">
		</div>
	</div>
	<input type="hidden" id="account_no" name="account_no" value="<?php echo $_GET['value'];?>">				
	<button type="button" id="statement_request" style="height: 29px;margin-top: 8px;">Submit</button>
</div>
	
<script type="text/javascript">
	$(document).ready(function(){		
		playAudio();
	});
</script>
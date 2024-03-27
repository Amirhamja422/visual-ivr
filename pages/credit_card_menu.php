<?php
session_start();
$value = $_GET['value'];
if (!empty($value)) {
	$_SESSION['card_no'] = $value;
}
?>

<div class="btn" onclick="loader('available_balance','<?php echo $_SESSION['card_no'];?>')">
	<div class="btn_icon">
		<img src="img/serial_icon/1.png">
	</div>
	<div class="btn-right">
		<img src="img/icon_bar.png">
		<p>Available Balance</p>
	</div>
</div>
<div class="btn" onclick="loader('last_5_transaction' ,'<?php echo $_SESSION['card_no'];?>')">
	<div class="btn_icon bill_payment">
		<img src="img/serial_icon/2.png">
	</div>
	<div class="btn-right bill_payment">
		<img src="img/icon_bar.png">
		<p>Last 5 Transaction</p>					
	</div>
</div>

<div class="btn" onclick="loader('total_payment_service' ,'<?php echo $_SESSION['card_no'];?>')">
	<div class="btn_icon">
		<img src="img/serial_icon/3.png">
	</div>
	<div class="btn-right">
		<img src="img/icon_bar.png">
		<p>Total Due Last Date of Payment</p>
					
	</div>
</div>
<div class="btn" onclick="loader('payment_history' ,'<?php echo $_SESSION['card_no'];?>')">
	<div class="btn_icon">
		<img src="img/serial_icon/4.png">
	</div>
	<div class="btn-right">
		<img src="img/icon_bar.png">
		<p>Payment History</p>
						
	</div>
</div>
<div class="btn" onclick="loader('current_limit' ,'<?php echo $_SESSION['card_no'];?>')">
	<div class="btn_icon">
		<img src="img/serial_icon/5.png">
	</div>
	<div class="btn-right">
		<img src="img/icon_bar.png">
		<p>Current Limit</p>
						
	</div>
</div>

<div class="btn" onclick="loader('tpin_change' ,'<?php echo $_SESSION['card_no'];?>')">
	<div class="btn_icon">
		<img src="img/serial_icon/6.png">
	</div>
	<div class="btn-right">
		<img src="img/icon_bar.png">
		<p>TPIN Change</p>
		
	</div>
</div>
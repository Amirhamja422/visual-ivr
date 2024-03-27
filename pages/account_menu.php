<?php
session_start();
$value = $_GET['value'];
if (!empty($value)) {
	$_SESSION['account_no'] = $value;
}
?>

<div class="btn">
	<div class="btn_icon">
		<img src="img/serial_icon/1.png">
	</div>
	<div class="btn-right">
		<img src="img/icon_bar.png">
		<p onclick="loader('account_balance','<?php echo $_SESSION['account_no'];?>')">Account Balance</p>
	</div>
</div>
<div class="btn">
	<div class="btn_icon bill_payment">
		<img src="img/serial_icon/2.png">
	</div>
	<div class="btn-right bill_payment">
		<img src="img/icon_bar.png">
		<p onclick="loader('account_transection','<?php echo $_SESSION['account_no'];?>')">Last 5 transactions</p>				
	</div>
</div>

<div class="btn">
	<div class="btn_icon">
		<img src="img/serial_icon/3.png">
	</div>
	<div class="btn-right">
		<img src="img/icon_bar.png" onclick="playAudio2()">
		<p onclick="loader('account_statement_request','<?php echo $_SESSION['account_no'];?>')">Request for Statement</p>					
	</div>
</div>
<div class="btn">
	<div class="btn_icon">
		<img src="img/serial_icon/4.png">
	</div>
	<div class="btn-right">
		<img src="img/icon_bar.png" onclick="playAudio3()">
		<p onclick="loader('account_TPIN_change','<?php echo $_SESSION['account_no'];?>')">Change TPIN</p>						
	</div>
</div>
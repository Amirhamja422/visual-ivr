<?php
include './libs/db.php';
//$get_token =$_GET['token'];
$get_token = $_GET['access'];
$sql = "SELECT * FROM `url` WHERE `token`='".$get_token."' ORDER BY ID DESC LIMIT 1";
$qry = mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($qry);
if($rowcount>0){
	$data = mysqli_fetch_assoc($qry);
	$valid_time = $data['valid_upto'];
	$now_time = date('Y-m-d H:i:s');
	if(strtotime($valid_time)>strtotime($now_time)){
		$get_access = '1';
	} else {
		$get_access = '2';
	}
} else {
	$get_access = '3';
} 
if($get_access=='1'){

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/418e01176d.js" crossorigin="anonymous"></script>
	<script src="js/audio.js"></script>
	<script src="js/credit_information.js"></script>
	<script src="js/account_information.js"></script>
	<script src="js/loader.js"></script>
	<script src="js/index.js"></script>
	<title>Visual IVR</title>	
</head>
<body id="body">
	<div class="container">
		<div class="row" id="row">
			<?php include 'layouts/header.php';?>		
			<div class="main_body" id="main_body"></div>
			<?php include 'layouts/footer.php';
			?>
		</div>
	</div>		
	<script type="text/javascript">
		$(document).ready(function(){
			loader('main_menu','');
			$(document).on('click','#clickbutton',function(){
				insert();
			});

			$(document).on('click','#accountsub',function(){
				account_submit();
			});

			$(document).on('click','#account_otp_submit',function(){
				account_otp_submit();
			});
			$(document).on('click','#credit_otp_submit',function(){
				credit_otp_submit();
			});
			$(document).on('click','#statement_request',function(){
				statement_request();
			});
			$(document).on('click','#tpinchange_request',function(){
				tpinchange();
			});
			$(document).on('click','#register',function(){
				register();
			});
		});		
	</script>
</body>
</html>

<?php
} else if($get_access=='2') {
	echo "Error 404! Session Expired";
} else if($get_access=='3'){
	echo "Error 404! Invalid Token";
} else {
	echo "Error 404! Invalid Link";
} 
?>
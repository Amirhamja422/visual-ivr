<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
function validatePhone($number) {
	$number=preg_replace('/\D/', '',  $number);    						//  Deleting Non Numeric Characters
	if(substr($number, 0, 1) == "+" ) $number=substr($number, 1);		//  Deleting + if in First Position
	if(substr($number, 0, 2) == "88") $number=substr($number, 2);		//  Deleting 8 if in First Two Position
	if(substr($number, 0, 2) == "00") $number=substr($number, 2);		//  Deleting 0 if in First Two Position
	if(strlen($number)<=5 || strlen($number)>11) return "NO";
	else return $number;
}


if (isset($_GET['phone_number'])) {
	$phone_number = $_GET['phone_number'];
	$phone = validatePhone($phone_number);
	?>
	<script type="text/javascript">
		$( document ).ready(function() {			
			generate_url('<?php echo $phone;?>');
		});
		//URL generation
		function generate_url(phone){
			var token = generate_token(length=20);
			var url = "http://116.193.217.4:9091/sgGGJCJhjhHGHG/abdX.php?token="+token;		
			$.ajax({
				type: "POST",
				url: "store_url.php",
				data:{
					token:token,
					url: url,
					phone_number:phone
				},
				success: function(data) {
					console.log(data);
				}
			});

		}
		//token Generation
		function generate_token(length){
			return Math.random().toString(30).substr(2, length);
		}
	</script>
	<?php
}else{
	echo "No phone Number found";
}
?>

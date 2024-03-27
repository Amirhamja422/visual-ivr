<?php
$servername = "localhost";
$username = "root";
$password = "iHelpBD@2017";
$dbname = "voice_ivr";
$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}else{
	// echo "Connection Extablished successfully....";
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "iHelpBD@2017";
$dbname = "voice_ivr";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}else{
	// echo "Connection Extablished successfully....";
}
?>
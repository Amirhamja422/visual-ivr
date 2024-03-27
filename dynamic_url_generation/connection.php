<?php
$servername = "localhost";
$username   = "root";
$password   = "iHelpBD@2017";
$db         = "voice_ivr";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>
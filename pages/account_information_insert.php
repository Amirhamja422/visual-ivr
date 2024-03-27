

<?php

include '../libs/db.php';
echo $name =$_POST['name'];
$account =$_POST ['account'];
$Passport =$_POST['Passport'];
$license =$_POST['license'];
$Profession =$_POST['Profession'];
$National_id =$_POST['National_id'];
$account_type =$_POST['account_type'];
// $packagephoto1 = $_FILES["packagephoto1"]["name"]."<br>";

$location="logo/";
	$packagephoto1=$_FILES['packagephoto1']['name'];
	$file_tmp1=$_FILES['packagephoto1']['tmp_name'];
	$packagephoto2=$_FILES['packagephoto2']['name'];
	$file_tmp2=$_FILES['packagephoto2']['tmp_name'];

	$data=[];
	$data=[$packagephoto1,$packagephoto2];
	$images=implode(' ',$data);

$query ="INSERT INTO `account_information`(`name`, `account`, `Passport`,`license`,`Profession`,`National_id`,`packagephoto1`,`packagephoto2`,`account_type`) VALUES ('$name','$account','$Passport','$license','$Profession','$National_id','$images','$images','$account_type')";
 $result =mysqli_query($con,$query);

		if($result)
	{
		move_uploaded_file($file_tmp1, $location.$packagephoto1);
		move_uploaded_file($file_tmp2, $location.$packagephoto2);
	
		echo "success";
	}
	else
	{
		echo "failed";
	}

?>


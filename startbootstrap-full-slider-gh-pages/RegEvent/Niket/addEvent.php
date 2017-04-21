<?php
	@session_start();
	$server_name = "localhost";
	$username = "root";
	$password = "";

	$conn = mysqli_connect($server_name,$username,$password,"xyz") or die("Connection Failed");

	$type = array();
	$type=$_POST["e_type"];
	$e_type = implode($type);
	$e_name=$_POST["e_name"];
	$e_date=$_POST["e_date"];
	$e_desc=$_POST["e_desc"];
	$e_address=$_POST["e_address"];
	$e_contact=$_POST["e_contact"];
	$e_image=$_POST["e_image"];
	$e_time=$_POST["e_time"];
	$e_tc=$_POST["e_t&c"];
	$e_creator = $_SESSION["email"];
	//echo $contact;

	// echo $e_type;

	$query1 = "INSERT into e_details (e_type, e_name, e_date, e_desc, e_address, e_contact, e_image, e_time, e_tc, e_creator) values ('$e_type','$e_name','$e_date','$e_desc','$e_address','$e_contact','$e_image','$e_time','$e_tc','$e_creator')";
	 echo $query1;
	$result = $conn->query($query1); echo $result;
	if ($result) {
		echo "ONE RECORD INSERTED";
		header("location:profile.php");
	}
	else{
		echo mysqli_error($conn); 
;
	}
	
	// 
?>

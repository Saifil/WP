<?php
session_start();
//making connection
$user= 'root';
$pass= 'root';
$db= 'asm';

$conn= new mysqli('localhost',$user,$pass,$db) or die("Unable to Connect");
//Temp variables
$email=$_POST["email"];
$password=$_POST["password"];
//checking connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
else{
	//login check
	$query= "SELECT id,email,password FROM  login WHERE email='$email' and password='$password'";
	$result = $conn->query($query);

	if ($row=$result->fetch_assoc()) {
	    // output data of each row
	    /*while($row = $result->fetch_assoc()) {
	        echo "email: " . $row["email"]. " - Password: " . $row["password"]. "<br>";
	    }*/
			//do function here
			//header('Location: http://www.google.com');
			$_SESSION['id']=$row['id'];

			//print_r($_SESSION);
	}
	else {
	    echo "Invalid Username/Password";
	}
	header("Location: RegEvent/event.php");
}
$conn->close();
//mysql_close($conn);
//echo "<script>window.location.href='finallog.html'</script>"
?>

<?php
  session_start();
  //making connection
  $user= 'root';
  $pass= 'root';
  $db= 'asm';

  $conn= new mysqli('localhost',$user,$pass,$db) or die("Unable to Connect");
  //checking connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{
    //echo "Connected successfully";


  // Create database
  //$sql = "CREATE DATABASE myDB";
  $query1="INSERT into login VALUES ('','$_POST[fname]','$_POST[dob]','$_POST[email]','$_POST[user]','$_POST[password]','$_POST[cpassword]')";
  if ($conn->query($query1) === TRUE) {
      //echo "New record created successfully";
      //echo "Entry made";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  header("Location: finallog.php");
}
  $conn->close();
  //echo "<script>window.location.href='finallog.html'</script>"
?>

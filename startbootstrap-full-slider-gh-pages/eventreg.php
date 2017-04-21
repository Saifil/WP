<?php
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
  // Create database
  //$sql = "CREATE DATABASE myDB";
  $query1="INSERT into event VALUES ('','$_POST[event]','$_POST[type]','$_POST[loc]','$_POST[date]','$_POST[time]','$_POST[img]','$_POST[desp]')";
  if ($conn->query($query1) === TRUE) {
      //echo "New record created successfully";
      //echo "Entry";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  //header("Location: index.php")
  }
  $conn->close();
  echo "<script>window.location.href='index.php'</script>"
?>

<?php
  @session_start();
  $server_name = "localhost";
  $username = "root";
  $password = "";

  $conn = mysqli_connect($server_name,$username,$password,"asm") or die("Connection Failed");

  //$e_id = $_GET["eid"];

  $sql = "SELECT * FROM event WHERE eid = '4';";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $row["img"]="k.png";
?>

<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="eventsindi.css">
</head>
<body>
<div style="background: url(<?=$row["img"]?>) 50% 50% no-repeat;" class="banner pad-top-45 pad-bottom-45 pad-top-60-m pad-bottom-60-m">
      <div class="container text-center pad-top-20-m pad-bottom-20-m pad-top-55-l pad-bottom-55-l">
      <h1 id="logo" class="logo">

        </h1>
    <h2 class="banner-heading" style="color: black;"><?=$row["event"]?><br>
    <img src="calender.png" style="height: 20px; width: 20px;"><b> <?=$row["date"]?>  | <img src="venue.png" style="height: 20px; width: 20px;"><?=$row["loc"]?></b></h2>
    </div>
  </div>


<div class="content">
  <div class="introduction-block pad-top-60 pad-bottom-60 container">
    <div class="clear pad-top-20 pad-bottom-20">
      <div class="col-6-l">
        <div class="col-11 no-float no-padding">
          <h2 class="uppercase pad-bottom-10">About</h2>
          <p class="fs-4"><?=$row["desp"]?>
            </p>
            
        </div>
      </div>

</body>
</html>
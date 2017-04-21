<!--<?php

$conn=mysql_connect("localhost","root","");
echo "Connected to MySQL<br>";
//select database
$db=mysql_select_db("asm",$conn);
  $event_name=$_POST["event"];
  $query="SELECT * from event where event='".$event_name."'";
  $res=mysql_query($query,$conn);
  $row=mysql_fetch_array($res);
  $event=$row['event'];
  $date=$row['date'];
  $loc=$row['loc'];
  $desp=$row['desp'];
  $img=$row['img'];

?>-->
<?php
  include('functions.php');

?>


<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="eventsindi.css">
</head>
<body>
<div class="banner pad-top-45 pad-bottom-45 pad-top-60-m pad-bottom-60-m">
      <!--<div class="container text-center pad-top-20-m pad-bottom-20-m pad-top-55-l pad-bottom-55-l">
      <h1 id="logo" class="logo">

        </h1>
    <h2 class="banner-heading" style="color: black;">Event Name<br>
    <img src="calender.png" style="height: 20px; width: 20px;"><b>  November 08-10 | <img src="venue.png" style="height: 20px; width: 20px;">   Sydney</b></h2>
   <div class="banner-buttons">
      <a class="button button-primary" href="#"><span class="icon icon-right chevron-right">Register</span></a>
      <a class="button" href="#">Discover</a>
    </div>
  </div>-->
  <?php
    getevent();
  ?>
</div>

<div class="content">
  <div class="introduction-block pad-top-60 pad-bottom-60 container">
    <div class="clear pad-top-20 pad-bottom-20">
      <div class="col-6-l">
        <div class="col-11 no-float no-padding">
          <h2 class="uppercase pad-bottom-10">About</h2>
          <p class="fs-4">
            Design must be functional, and functionality must be translated into visual aesthetics without any reliance on gimmicks that have to be explained.
          </p>
          <p>
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident.
          </p>
        </div>
      </div>
      <div class="col-6-l">
        <div class="tabs tabs-primary">
          <ul class="tabs-list clear">
            <li class="col-6-m block text-center no-padding tab active"><a href="#learning-objective" data-toggle="tab">Learning Objective</a></li>
            <li class="col-6-m block text-center no-padding tab"><a href="#target-audience" data-toggle="tab">Target Audience</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="learning-objective">
              <p>
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odot aut fugit, sed quia consequunur magni dolores eos.
              </p>
              <div class="clear">
                <div class="col-7-m">
                  <ul class="list">
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Lorem ipsum dolor sit amet</li>
                  </ul>
                </div>
                <div class="objective">
                  <img class="cloud" src="img/cloud.svg" alt="Cloud">
                  <img class="objective-img heart heart-1" src="img/heart.svg" alt="Heart">
                  <img class="objective-img images" src="img/images.svg" alt="Images">
                  <img class="heart heart-2" src="img/heart.svg" alt="Heart">
                  <img class="heart heart-3" src="img/heart.svg" alt="Heart">
                  <img class="objective-img video" src="img/video.svg" alt="Video">
                  <img class="heart heart-4" src="img/heart.svg" alt="Heart">
                  <img class="heart heart-5" src="img/heart.svg" alt="Heart">
                  <img class="objective-img music" src="img/music.svg" alt="Music">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="target-audience">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr class="hr">

 <div class="event-location-block content-block">
    <h2 class="sr">Event Location</h2>

    <div id="map" class="map">
    <div class="location-box-container">
        <div class="location-box pad-20">
          <h2 class="fs-6 strong">Sydney Exhibition Centre</h2>
          <address class="location">
            Glebe Island - 41 James Craig Road <br>
            Rozelle NSW 2039
          </address>
          <span class="block text-right">
            <a class="icon icon-right arrow-right uppercase" href="#">Get directions</a>
          </span>
        </div>
      </div>
      <div id="google-map" class="google-map"></div>
    </div>
  </div>
</body>
</html>


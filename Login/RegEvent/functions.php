<?php
//connect to MySQL DBMS
//$hostname="localhost";
//$username="mitchell";
//$password="dsilva";
mysql_connect("localhost","root","") or die (mysql_error ());

	// Select database
	mysql_select_db("asm") or die(mysql_error());

function getevent()
{
	global $conn;
	//$query=mysql_query("SELECT * from event where eid='5'",$conn);
   //$res=mysql_fetch_row($query);

	$strSQL = "SELECT * FROM event WHERE eid='4'";

	// Execute the query (the recordset $rs contains the result)
	$row = mysql_query($strSQL);

	$res = mysql_fetch_array($row);

   $event_name=$res['event'];
   $loc=$res['loc'];
   $date=$res['date'];
   $desp=$res['desp'];
   $img=$res['img'];
   
   echo '<div class="container text-center pad-top-20-m pad-bottom-20-m pad-top-55-l pad-bottom-55-l">
      <h1 id="logo" class="logo">

        </h1>
    <h2 class="banner-heading" style="color: black;">'.$event_name.'<br>
    <img src="calender.png" style="height: 20px; width: 20px;"><b>  November 08-10 | <img src="venue.png" style="height: 20px; width: 20px;">   Sydney</b></h2>
   <!-- <div class="banner-buttons">
      <a class="button button-primary" href="#"><span class="icon icon-right chevron-right">Register</span></a>
      <a class="button" href="#">Discover</a>
    </div>-->
  </div>';
}
mysql_close();
?>
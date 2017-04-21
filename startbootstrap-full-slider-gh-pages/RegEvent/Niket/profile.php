<?php
@session_start();
?>
<!DOCTYPE html>
<html>
<head>
<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

     
	
	<title>Profile page</title>

	<script type="text/javascript">
		$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });       
	</script>
	<script type="text/javascript">
		
		$('.datepicker').pickadate({
		    selectMonths: true, // Creates a dropdown to control month
		    selectYears: 15 // Creates a dropdown of 15 years to control year
		  });
     
	</script>
</head>

<style type="text/css">

  .modal-footer {
  	float:left;
  }
  }
   body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
   
</style>

      
<body class="grey lighten-3">

		<!-- Start navbar -->
	<nav class="black" >
        <div class="nav-wrapper" style="height: 100px">
            <a href="#" class="brand-logo" style="padding-left:2%;">Welcome <?=$_SESSION["name"]?>!</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down" style="padding-right:2%;">
              <li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Home" href="home.php"><i class="large material-icons">home</i></a></li>
              <li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Logout" href="index.php"><i class="large material-icons">person_pin</i></a></li>
            </ul>
          </div>
        </nav>
        <!-- End navbar -->

        <!-- past events header -->        
        <div class="container">
        <h4>Your past Events:</h4>
        </div>
        <!-- End past events header -->
        <div class="row container " style="margin-top: 20px;">
        <?php
            $server_name = "localhost";
            $username = "root";
            $password = "";
            $creator = $_SESSION["email"];

            $conn = mysqli_connect($server_name,$username,$password,"xyz") or die("Connection Failed");

            $sql = "SELECT * FROM e_details WHERE e_creator LIKE '$creator';";

            $result = $conn->query($sql);
            if ($result->num_rows>0) {
              while ($row = $result->fetch_assoc()) {
                // echo $row["e_name"];
                ?>

          <!-- card starts -->
          <div class="col s12 m6 l4">
            <div class="card small">
              <div class="card-image waves-effect waves-block waves-light"><img class="activator" src="assets/img/<?=$row["e_image"]?>" height="300px"></div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4"><?=$row['e_name']?><i class="material-icons right">more_vert</i></span>
                <p><a href="individual.event.php?e_id=<?=$row["e_id"]?>">Details</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                <p><?=$row['e_desc']?></p>
              </div>
            </div>
          </div>
          <!-- End of Card  -->
          <?php
          }
            }
            else{
              echo "NO EVENT ADDED";
            }
          ?>
          </div>
          

<div class="container">
  
			<!-- Modal Trigger -->
  <button data-target="modal1" class="btn" style="background-color: black; color:white;"">Add New Event</button>
 			<!-- End Modal Trig/ger -->

	    <!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
	    <h4>Add the required details</h4>

	    <!-- form start -->
	<div class="row">
    	<form class="col s12" method="POST" action="addEvent.php">
    	<!-- Event Type -->
    	<div class="row">
    		Event Type:
    		<input name="e_type[]" type="radio" id="food" value="food" />
     		<label for="food">Food</label>

     		<input name="e_type[]" type="radio" id="sports" value="sports" />
      		<label for="sports">Sports</label>

      		<input name="e_type[]" type="radio" id="travel" value="travel" />
      		<label for="travel">Travel</label>
    	</div>
    	<!-- End Event type -->



    	<!-- Event name -->
      	<div class="row">
      		<div class="input-field col s12">
        	  <input  id="e_name" type="text" class="validate" name="e_name">
          	  <label for="e_name">Event Name</label>
        	</div>
        </div>
        <!-- end event name -->

        <!-- Date -->
        <div class="row">
        	 <div class="input-field col s12">
        	  <input type="date" class="datepicker" id="e_date" name="e_date">
        	  <label for="e_date">Event Date</label>
        	</div>
        </div>
        <!-- End date -->

        <!-- Event Time -->
        <div class="row">Time
        	<input type="time" name="e_time" id="e_time">
        </div>
        <!-- End Time -->

        <!-- Start event desc -->
    <div class="row">
        <div class="input-field col s12">
          <textarea id="e_desc" class="materialize-textarea" name="e_desc"></textarea>
          <label for="e_desc">Event Description</label>
        </div>
    </div>
        <!-- End event desc -->

        <!-- Address -->
     <div class="row">
        <div class="input-field col s12">
          <textarea id="e_address" class="materialize-textarea" name="e_address"></textarea>
          <label for="e_address">Location</label>
        </div>
      </div>
        <!-- End Address -->

        <!-- Event-contact -->
        <div class="row">
        	<div class="input-field col s12">
        	  <input  id="e_contact" type="number" class="validate" name="e_contact">
          	  <label for="e_contact">Contact.no</label>
        	</div>	
        </div>
        <!-- End event_contact -->


     <!-- Image -->
     <div class="file-field input-field">
      <div class="btn">
        <span>Event-Image</span>
        <input type="file" id="e_image" name="e_image">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
     <!-- end image -->

         <!-- Start event t&c-->
    <div class="row">
        <div class="input-field col s12">
          <textarea id="e_t&c" class="materialize-textarea" name="e_t&c"></textarea>
          <label for="e_t&c">Terms & Conditions(if any)</label>
        </div>
    </div>
        <!-- End event t&c -->
  </div>
    <div class="modal-footer">
      <button class=" btn waves-effect waves-light modal-action modal-close waves-green btn-flat" style="border-style: groove; border-width: 0.25px; background-color:#26a69a; color: white;" type="submit" name="action">Submit Event<i class="material-icons right">send</i></button>
    </div>
  </div>
  </form>
 </div>
 </div>
 </div>
 </div>

    
          
		<!-- End modal structure -->
		          
         <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
        $('.datepicker').pickadate({
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15 // Creates a dropdown of 15 years to control year
        });
      </script>


      <!-- footer -->
        <footer class="page-footer black" style="margin-top:20px;">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">About Us</h5>
                <p class="grey-text text-lighten-4">REUNIO is.....</p>
                <p class="grey-text text-lighten-4"> REUNIO is a new curated lifestyle platform that gives you access to a handpicked<br> selection of events and  products.It's a marketplace to find cool stuff to do<br> and interesting products to buy.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">FOUNDERS</h5><br>
                <ul>
                  <h5 class="white-text">Shruti Shakhla</h5>
                  <li><br></li>
                  <h5 class="white-text">Niket Shah</h5>
                  <li></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
           
            </div>
          </div>
        </footer>
            <!-- End Footer -->


</body>
</html>


<?php
  @session_start();
  $server_name = "localhost";
  $username = "root";
  $password = "";

  $conn = mysqli_connect($server_name,$username,$password,"xyz") or die("Connection Failed");

  $e_id = $_GET["e_id"];

  $sql = "SELECT * FROM e_details WHERE e_id = $e_id;";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

?>
  <!DOCTYPE html>
  <html>
    <head>
    <title> Guest Individual Event</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script>
        $(document).ready(function(){
          $('.slider').slider({indicators : false,interval: 3000,height: 500});
          $('ul.tabs').tabs();
        });

        $(document).ready(function(){
          $('.collapsible').collapsible();                //collapsible//
        });

        $('.collapsible').collapsible({
          accordion: false, // A setting that changes the collapsible behavior to expandable instead of the default accordion style
         onOpen: function(el) { alert('Open'); }, // Callback for Collapsible open
          onClose: function(el) { alert('Closed'); } // Callback for Collapsible close
          });
        
        $(document).ready(function(){
           $('.materialboxed').materialbox();             //materialboxed image// 
        });
      
      </script>
      <style>
      .tabs .tab a{
            color:white;
        } /*Color to the text*/

        .nsclass{
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 2%;
            padding-right: 2%; 
        }
        .nsclass11{
            padding-left: 30px;
        }
        .tabs .tab a:hover {
            background-color:transparent;
            color:white;
        } /*Text color on hover*/

        .tabs .tab a.active {
            background-color:transparent;
            color:white;
        } /*Background and text color when a tab is active*/

        .tabs .indicator {
            background-color:white;
        } /*Color of underline*/

        .collapsible-body {
          background-color: white;          
        }

       .collection-header {
        border: none;
       }
       
       .collection-item {
        background-color:transparent;
       }
      </style>
    </head>

    <body class="grey lighten-3">
        <!--Start navbar-->
        <nav class="black">
          <div class="nav-wrapper">
            <a href="#" class="brand-logo" style="padding-left:2%;">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down" style="padding-right:2%;">
              <li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Home" href="index.php"><i class="large material-icons">home</i></a></li>
              <li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Login" href="login.html"><i class="large material-icons">person_pin</i></a></li>
             
            </ul>
          </div>
        </nav>
        <!--end navbar-->

        <!-- Main Section -->

        <div class="grey lighten-2">
          <div class="row nsclass">
              <div class="col s6">
                <img class="materialboxed" width="650" src="assets/img/<?=$row['e_image']?>">
              </div>

            <div class="col s6 nsclass11" style="padding-left: 30px;">
                <div class="row"><h3><?=$row["e_name"]?></h3></div>
                <div class="row" style="word-wrap: break-word;"><h5><i class="material-icons">room</i>&nbspVenue:<br><?=$row["e_address"]?></h5></div>
                <div class="row"><h5><i class="material-icons">today</i>  &nbspDate:<?=$row["e_date"]?></h5></div>
                <div class="row"><h5><i class="material-icons">phone</i>  &nbspContact:<?=$row["e_contact"]?></h5></div>
                <div class="row"><form method="post" action="#"><button type="submit" class="waves-effect waves-light btn" name="interested"><i class="material-icons right">thumb_up</i>Interested</button></form></div>
            </div>
          </div>
        </div>
          <!-- end Main Section -->

          

          <!-- About -->

          <!-- <div class="container white ">
          <div class="row" style="padding-left: 30px;"><h5> <i class="material-icons">info_outline</i>About</h5></div>
          <p style="padding-left: 20px;">This is the most useless thign i m doing in my life right now.</p>
          </div> -->

          <div class=" container row">
            <div class="col s12 m6">
              <div class="card white">
                <div class="card-content black-text" >
                  <span class="card-title">About</span>
                  <p style="word-wrap: break-word;"><?=$row["e_desc"]?></p>
                </div>
              </div>
            </div>
            <div class="col s12 m6">
              <div class="card white">
                <div class="card-content black-text">
                  <span class="card-title">Venue</span>

                </div>
              </div>
            </div>

          </div>
          <div class=" container row">
            <div class="col s12">
              <div class="card white">
                <div class="card-content black-text">
                  <span class="card-title">Terms & Conditions</span>
                  <p style="word-wrap: break-word;"><?=$row["e_tc"]?></p>
                </div>
              </div>
            </div>
          </div>


          <!-- End About -->

          <!-- Venue -->



          <!-- <div class="container white ">
          <div class="row" style="padding-left: 30px"><h5> <i class="material-icons">room</i>Venue</h5></div>
          <p style="padding-left: 20px;">This is the most useless thign i m doing in my life right now.</p>
          </div>` -->
          <!-- End Venue -->`

                  <!--start collapsible-->

        <!--end collapsible-->
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
<?php
  if (isset($_POST["interested"])) {
    echo "bdhbvjhkvbervb";
    $e_id = $_GET["e_id"];
    $sql = "SELECT e_interested FROM e_details WHERE e_id = $e_id;";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $int = $row["e_interested"];
    $int++;
    $sql = "UPDATE e_details SET e_interested = $int WHERE e_id = $e_id;";
    $result = $conn->query($sql);
    

  }


?>
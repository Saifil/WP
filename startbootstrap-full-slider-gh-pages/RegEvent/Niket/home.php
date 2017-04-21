<?php
        @session_start();
        $server_name = "localhost";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($server_name,$username,$password,"xyz") or die("Connection Failed");
?><!DOCTYPE html>
  <html>
    <head>
    <title>Home</title>
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
      </script>
      <style>
      .tabs .tab a{
            color:white;
        } /*Color to the text*/

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

      </style>
    </head>

    <body class=" grey lighten-3">
        <!--Start navbar-->
        <nav class="black" >
          <div class="nav-wrapper">
            <a href="#" class="brand-logo" style="padding-left:2%;">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down" style="padding-right:2%;">
              <li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Profile" href="profile.php"><i class="large material-icons">perm_identity</i></a></li>
              <li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Logout" href="index.php"><i class="large material-icons">power_settings_new</i></a></li>
            </ul>
          </div>
        </nav>
        <!--end navbar-->

       <!--start slider-->
        <div class="slider">
          <ul class="slides">
            <li>
              <img src="assets/img/img5.jpg"> <!-- random image -->
              <div class="caption center-align"><br><br><br><br><br>
                <h3 style="font-size: 60px; font-weight:bolder;">Enjoy the Food Fiesta!!!</h3>
                <h5 class="light grey-text text-lighten-3" style="font-weight: bolder;">Exclusively at MasterChef</h5>
              </div>
            </li>
            <li>
              <img src="assets/img/img7.jpg"> <!-- random image -->
              <div class="caption right-align">
                <h3 style="font-size: 40px; font-weight:bolder;">Don't<br>Run<br>Away<br>From<br>Challenges<br></h3>
                <h5 class="light grey-text text-lighten-3" style="font-weight: bolder;">Exclusively at BKC</h5>
              </div>
            </li>
            <li>
              <img src="assets/img/1.jpg"> <!-- random image -->
              <div class="caption left-align">
                <h3 style="font-size: 60px; font-weight:bolder;">Experience Magic</h3>
                <h5 class="light grey-text text-lighten-3" style="font-weight: bolder;">Like you have never before.</h5>
              </div>
            </li>
          </ul>
        </div>
    <!--end slider-->


    <!-- Tabs -->
    <div class="row black">
      <div class="col s12">
        <div class="container">
          <ul class="tabs black ">
            <li class="tab col s3"><a class="active" href="#test1">Trending</a></li>
            <li class="tab col s3"><a class="" href="#test2">Food</a></li>
            <li class="tab col s3"><a href="#test3">Sports</a></li>
            <li class="tab col s3"><a href="#test4">Travel</a></li>
          </ul>
        </div>
      </div>
    </div>
    <br><br>
    <div class="">

      
      <!-- Trending -->
      <div id="test1" class="col s12">
        <div class="row container">
        <?php
             $query1 = "SELECT * FROM e_details ORDER BY e_interested DESC LIMIT 3 ;";
              $result=$conn->query($query1);
              if ($result->num_rows>0) {
                 while($row=$result->fetch_assoc())
                 {
                  //echo $row['e_name'];
                  ?>
            <div class="col s12 m6 l4">
            <div class="card small">
              <div class="card-image waves-effect waves-block waves-light"><img class="activator" src="assets/img/<?=$row["e_image"]?>" height="300px"></div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4"><?=$row['e_name']?><i class="material-icons right">more_vert</i></span>
                <p><a href="individual.event.php?e_id=<?=$row["e_id"]?>">View Details</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                <p><?=$row['e_desc']?></p>
              </div>
            </div>
          </div>
          <!-- End of Card  -->
                    <?php
           }  }
        ?>
          
        </div>
        <!-- End of Row -->
      </div>
      <!-- End of Trending -->

      <!-- Food -->
      <div id="test2" class="col s12">
        <div class="row container">

          <?php


        $query1 = "SELECT * FROM e_details where e_type like 'food';";
        $result=$conn->query($query1);
        if ($result->num_rows>0) {
           while($row=$result->fetch_assoc())
           {
            //echo $row['e_name'];
            ?>
           <!-- card starts -->
          <div class="col s12 m6 l4">
            <div class="card small">
              <div class="card-image waves-effect waves-block waves-light"><img class="activator" src="assets/img/<?=$row["e_image"]?>" height="300px"></div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4"><?=$row['e_name']?><i class="material-icons right">more_vert</i></span>
                <p><a href="individual.event.php?e_id=<?=$row["e_id"]?>">View Details</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                <p><?=$row['e_desc']?></p>
              </div>
            </div>
          </div>
          <!-- End of Card  -->
          <?php
           }  }
        ?>
        </div>
        <!-- End of Row -->
      </div>
      <!-- End of Food -->

      <!-- Places -->
      <div id="test3" class="col s12">
        <div class="row container">
          <?php


        $query1 = "SELECT * FROM e_details where e_type like 'sports';";
        $result=$conn->query($query1);
        if ($result->num_rows>0) {
           while($row=$result->fetch_assoc())
           {
            //echo $row['e_name'];
            ?>
           <!-- card starts -->
          <div class="col s12 m6 l4">
            <div class="card small">
              <div class="card-image waves-effect waves-block waves-light"><img class="activator" src="assets/img/<?=$row["e_image"]?>" height="300px"></div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4"><?=$row['e_name']?><i class="material-icons right">more_vert</i></span>
                <p><a href="individual.event.php?e_id=<?=$row["e_id"]?>">View Details</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                <p><?=$row['e_desc']?></p>
              </div>
            </div>
          </div>
          <!-- End of Card  -->
          <?php
           }  }
        ?>
        </div>
        <!-- End of Row -->
      </div>
      <!-- End of Places -->

      <!-- Travel -->
      <div id="test4" class="col s12">
        <div class="row container">
          <?php


        $query1 = "SELECT * FROM e_details where e_type like 'travel';";
        $result=$conn->query($query1);
        if ($result->num_rows>0) {
           while($row=$result->fetch_assoc())
           {
            //echo $row['e_name'];
            ?>
           <!-- card starts -->
          <div class="col s12 m6 l4">
            <div class="card small">
              <div class="card-image waves-effect waves-block waves-light"><img class="activator" src="assets/img/<?=$row["e_image"]?>" height="300px"></div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4"><?=$row['e_name']?><i class="material-icons right">more_vert</i></span>
                <p><a href="individual.event.php?e_id=<?=$row["e_id"]?>">View Details</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                <p><?=$row['e_desc']?></p>
              </div>
            </div>
          </div>
          <!-- End of Card  -->REUNIO
          <?php
           }  }
        ?>
        </div>
        <!-- End of Row -->
      </div>
      <!-- End of Travel -->
    </div>
    <!-- End of Tabs -->  

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

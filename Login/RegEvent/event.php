<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <base target="_top">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
      <link href="bootstrap.css" rel="stylesheet">
      <link href="css/datepicker.css" rel="stylesheet">
      <link rel="stylesheet" href="css/button.css">
      <link rel="stylesheet" type="text/css" href="bootstrap.css">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <!--Added sidebar-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous">
      <link rel="stylesheet" href="homestyle.css">
      <link href="https://fonts.googleapis.com/css?family=Orbitron|Oswald" rel="stylesheet">
      <script src="homeScript.js"></script>

    <title>Events</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="full-slider.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <!--Added Sidebar-->
  <button type="button" id="button1" onclick="mySideBar()" class="glyphicon glyphicon-align-justify"></button>
  <div class="navpage" id="nav1" style="display:none;">
    <div class="navpage-left">
      <ul class="navlist">
        <li><a href="http://localhost/WP/homepage.php">HOME</a></li>
        <li><a href="#">EVENTS</a></li>
        <li><a href="http://localhost/WP/startbootstrap-agency-gh-pages/">ABOUT US</a></li>
        <li><a href="http://localhost/WP/Login/finallog.php">REGISTER/SIGNUP</a></li>
        <li><a href="#gallery">GALLERY</a></li>
      </ul>
    </div>
    <div class="navpage-right">
      <div class="image-content-div">
        <div class="navpage-right-content">
          <h2>OUTSIDER.IN</h2>
          <p>DJ Sanghvi</p>
          <p>+91 9819519671</p>
          <p class="bbottom">Mumbai</p>
        </div>
        <ul class="image-content-list">
          <li><a href="https://facebook.com"><img src="images/facebook1.png" alt="facebook"></a></li>
          <li><a href="https://instagram.com"><img src="images/instagram1.png" alt="facebook"></a></li>
          <li><a href="https://twitter.com"><img src="images/twitter1.png" alt="facebook"></a></li>
        </ul>
      </div>
    </div>
  </div>
    <!-- Navigation -->

    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('flea.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Sports</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('slider2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Dance</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('slider3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Art</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>


    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Events</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Popular</a>
                    </li>
                    <li>
                        <a href="#">Up-coming</a>
                    </li>
                    <li>
                        <a href="#"></a>
                    </li>
                    <li style="float: right;">
                        <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#createeventmodal">Add an Event</button>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<!--form start-->
<!--create event modal-->
  <form method="post" action="eventreg.php">
  <div id="createeventmodal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Create Event Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create a New Event</h4>
        </div>
          <div class="container-fluid">
        <div style="height: 5px;">

            </div>

        <span class="lefttext">Event Name :</span>
            <input type="text" name="event" class="form-control" id="modalinputs" placeholder="Event Name" width="80%">

            <div style="height: 5px;">

            </div>

        <div class="modal-body" id="createeventmodal">
          <div class="issue">
            Genre: &nbsp &nbsp
            <select name="type">
                <option value="food">Food</option>
                <option value="sports">Sports</option>
                <option value="travel">Travel</option>

                <option value="comedy">Comedy</option>
                <option value="Music">Music</option>
                <option value="Games">Games</option>
                <option value="Art">Art</option>
                <option value="Theatre">Theatre</option>
                <option value="Flea">Flea Market</option>
                </select>

            </div>
          </div>

          <div style="height: 5px;">

          </div>

            <span class="lefttext">Location:</span>
            <input type="text" name="loc" class="form-control" id="modalinputs" placeholder="Event Location" width="80%">

          <div style="height: 10px;">

          </div>

          <div class="datetime">
            <span class="lefttext">Date:</span>
            <input type="date" class="form-control" name="date" placeholder="MM/DD/YYYY">
          </div>

          <div style="height: 10px;">

          </div>

          <div style="height: 10px;"></div>

          Time: &nbsp &nbsp <input type="Time" name="time">

          <div class="imgurl">
            <span class="lefttext">Image URL: </span>
            <input type="text" name="img" class="form-control" id="modalinputs" placeholder="URL">
          </div>

          <div class="eventDescription">
            <span class="lefttext">Event Description: </span>
            <div class="form-group">
              <textarea class="form-control" name="desp" rows="7" id="comment" placeholder="Event Description"></textarea>
            </div>
          </div>

          <div class="modal-footer">
            <input type="submit" class="btn btn-default">
          </div>
        </div>
        </div>
      </div>
      </div>
      </form>
  <!--form end-->

    <!-- Page Content -->
    <div class="container">
<?php
            $server_name = "localhost";
            $username = "root";
            $password = "root";
           // $creator = $_SESSION["email"];

            $conn = mysqli_connect($server_name,$username,$password,"asm") or die("Connection Failed");

            $sql = "SELECT * FROM event WHERE eid>'13';";

            $result = $conn->query($sql);
            if ($result->num_rows>0) {
              while ($row = $result->fetch_assoc()) {
                // echo $row["e_name"];
                ?>

       <div class="row">
  <div class="col-sm-4">
    <div class="card">
    <img class="card-img-top" src="<?=$row["img"]?>" alt="Card image cap">
      <div class="card-block">
        <h3 class="card-title"><?=$row['event']?></h3>
        <p class="card-text"><?=$row['desp']?></p>
        <br>
        <a href="fake.php?eid=<?=$row['eid']?>" class="btn btn-primary">Discover More</a>
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
          ?>   <!-- /.row -->

    </div>
    <!-- /.container -->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>

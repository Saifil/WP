
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
  crossorigin="anonymous">
  <link rel="stylesheet" href="homestyle.css">
  <link href="https://fonts.googleapis.com/css?family=Orbitron|Oswald" rel="stylesheet">
  <script src="homeScript.js"></script>
  <title>Home</title>
</head>
<body>
  <button type="button" id="button1" onclick="mySideBar()" class="glyphicon glyphicon-align-justify"></button>
  <div class="homeicon">
    <a href="#home" class="hometext" style="color:white;">O</a>
  </div>
  <div class="eventicon">
    <a href="#event" class="eventtext"style="color:white;">E</a>
  </div>
  <div class="navpage" id="nav1" style="display:none;">
    <div class="navpage-left">
      <ul class="navlist">
        <li><a href="#home">HOME</a></li>
        <li><a href="Login/RegEvent/event.php">EVENTS</a></li>
        <li><a href="http://localhost/WP/startbootstrap-agency-gh-pages/">ABOUT US</a></li>
        <li><a href="Login/finallog.php">REGISTER/SIGNUP</a></li>
        <li><a href="#gallery">GALLERY</a></li>
      </ul>
    </div>
    <div class="navpage-right">
      <div class="image-content-div">
        <div class="navpage-right-content">
          <h2>Outsider.in</h2>
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
  <div class="parallax1" id="home">
    <img class="imgctr" src="logo.png" align="middle" alt="notavail">
  </div>
  <div class="parallax2" id="event">
    <button class="pb1"><a class="hidea"href="Login/RegEvent/event.php" >EVENTS</a></button>
  </div>

  <div class="parallax4" id="login">
    <button class="pb1"><a class="hidea"href="Login/finallog.php">LOGIN</a></button>
  </div>
  <div class="parallax3" id="about">
    <button class="pb1" class="pb1change"><a class="hidea"href="http://localhost/WP/startbootstrap-agency-gh-pages/">ABOUT</a></button>

  </div>
</body>
</html>

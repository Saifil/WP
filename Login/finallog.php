<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login & Sign Up Form Concept</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="stylesheet" type="text/css" href="bootstrap.css">

      <link rel="stylesheet" type="text/css" href="style.css">
<!--Form validation-->
<script type="text/javascript">
    function validate() {
        var password = document.getElementById("pass").value;
        var confirmPassword = document.getElementById("cpass").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>

</head>

<body>


  <div class="cotn_principal">

<div class="cont_centrar">
  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">

        <h2>LOGIN</h2>
  <p>Already have an account ?</p>
  <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>SIGN UP</h2>


  <p>Create a new account here.</p>

  <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
</div>
  </div>
       </div>


    <div class="cont_back_info">
       <div class="cont_img_back_grey">
       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
       </div>

    </div>
<div class="cont_forms" >
    <div class="cont_img_back_">
       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
       </div>
<!--login-->
 <form method="post" action="login.php">
 <div class="cont_form_login">
<a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
   <h2>LOGIN</h2>
 <input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
  <input type="submit" name="submit" class="btn btn-primary" value="Login">
  </div>
</form>
<!--register-->
  <form method="post" action="connect.php" onsubmit="return validate()">
   <div class="cont_form_sign_up">
<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>

     <h2>SIGN UP</h2>
     <input type="text" name="fname" placeholder="Full Name" required>
     <input type="date" name="dob" placeholder="Date of Birth"  >
  <input type="email" name="email" placeholder="Email" required>
  <input type="text" name="user" placeholder="User" required>
  <input type="password" name="password" placeholder="Password" required id="pass">
  <input type="password" name="cpassword" placeholder="Confirm Password" required id="cpass">
  <input type="submit" name="submit" class="btn btn-danger " value="Submit">
  <!--<input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="other">Other-->
  <!--<button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>-->
</form>
  </div>

    </div>

  </div>
 </div>
</div>

    <script src="index.js"></script>

</body>
</html>

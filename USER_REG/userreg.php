<?php require_once("include/DB.php") ?>
<?php require_once("include/function.php") ?>
<?php require_once("include/session.php") ?>
<?php 
  // if(isset($_POST["login"]))
  // {
  //   Redirect_to("login.php");
  // }
  if(isset($_POST["submit"]))
  {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $emailid = mysqli_real_escape_string($connection, $_POST["emailid"]);
    $password = mysqli_real_escape_string($connection, $_POST["password"]);
    $confirmpassword = mysqli_real_escape_string($connection, $_POST["confirmpassword"]);
    $token = bin2hex(openssl_random_pseudo_bytes(40));
    if(empty($username) && empty($emailid) && empty($password) && empty($confirmpassword))
    {
      $_SESSION["message"] = "All Feilds Must be Filled Out";
      Redirect_to("userreg.php");
    }
    elseif($password !== $confirmpassword)
    {
      $_SESSION["message"] = "Password missmatch";
      Redirect_to("userreg.php");
    }
    elseif(strlen($password) < 4)
    {
      $_SESSION["message"] = "Password too short";
      Redirect_to("userreg.php");
    }
    elseif(checkemail($emailid))
    {
      $_SESSION["message"] = "Email Already exist.";
      Redirect_to("userreg.php");
    }
    else
    {
      global $connectingdb;
      $hashedpass = passwordencryption($password);
      $query = "INSERT INTO admin_panel (username, email, password, token, active) VALUES ('$username', '$emailid', '$hashedpass', '$token', 'OFF')";
      $execute = mysqli_query($connection, $query);
      if($execute)
      {
        echo $token;
        $body = 'Hi' .$username. 'Here is the link to activate account 
        http://localhost/USER_REG/activate.php?token=' .$token;
        if(mail($emailid, 'Confirmation', $body , 'From: atriadhikarinsec@gmail.com'))
        {
            $_SESSION["successmessage"] = "Check Email For Activation";
            Redirect_to("login.php");
        }
        else
        {
          $_SESSION["message"] = "Something went wrong.";
          Redirect_to("userreg.php");
        }
  
      }
      else
      {
        $_SESSION["message"] = "Something Went Wrong";
        Redirect_to("userreg.php");
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="include/userreg.css">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
      <title>Register Now</title>
  </head>
  <body>
    <div>
    <?php echo Message(); ?>
    <?php echo succMessage(); ?>
    </div>
      <div class="bg"></div>
      <div class="container animated fadeIn">
        <center>
          <h2>
            <a href="signup.html">Sign UP</a>
          </h2>
        </center>
        <hr>
        <form name="myform" action="userreg.php" method="post">
        <center>
            <div> 
              <input type="text" name="username" placeholder="Username" value="">
              <input type="email" name="emailid" placeholder="Email Id" value="">
              <input type="password" name="password" placeholder="Password">
              <input type="password" name="confirmpassword" placeholder="Confirm Password">

            </div>
              <input type="submit" name = "submit" value = "Register" placeholder = "Submit" >
              <a href="Login.php"><input type="button" value = "Login" ></a>
              <br>
        </form>
      </div>
    </div>
    <div class="wrapper">
      <ul>
        <!-- <li class="facebook"><a href="login.html"><i class="fa fa-home fa-2x" ></i></a></li> -->
      </ul>
    </div>
  </body>
</html>
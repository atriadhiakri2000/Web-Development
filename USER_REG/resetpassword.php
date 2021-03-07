<?php require_once("include/DB.php") ?>
<?php require_once("include/function.php") ?>
<?php require_once("include/session.php") ?>
<?php 
  $connection = mysqli_connect('localhost', 'root', '');
  $connectingdb = mysqli_select_db($connection, "regsystem");
  if (isset($_GET['token']))
  {
      $tokenfromurl = $_GET['token'];
  }
  if(isset($_POST["submit"]))
  {
    $password = mysqli_real_escape_string($connection, $_POST["password"]);
    $confirmpassword = mysqli_real_escape_string($connection, $_POST["confirmpassword"]);
    if(empty($password) || empty($confirmpassword))
    {
      $_SESSION["message"] = "All Feilds Must be Filled Out";
    }
    elseif($password !== $confirmpassword)
    {
      $_SESSION["message"] = "Password missmatch";
    }
    elseif(strlen($password) < 4)
    {
      $_SESSION["message"] = "Password too short";
      Redirect_to("userreg.php");
    }
    else
    {
      global $connectingdb;
      $hashedpass = passwordencryption($password);
      $query = "UPDATE admin_panel SET password = '$hashedpass' WHERE token = '$tokenfromurl'";
      $execute = mysqli_query($connection, $query);  
      if($execute)
      {
          $_SESSION["successmessage"] = "Password Change Successfully";
          redirect_to("login.php");
      }
      else
      {
        $_SESSION["message"] = "Something Went Wrong";
        redirect_to("userreg.php");
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
        <form name="myform" action="resetpassword.php?token=<?php echo $tokenfromurl; ?>" method="post">
        <center>
            <div> 
              <input type="password" name="password" placeholder="Password">
              <input type="password" name="confirmpassword" placeholder="Confirm Password">

            </div>
              <input type="submit" name = "submit" value = "Submit" placeholder = "Submit" >
        </center>
              <br>
        </form>
      </div>
    </div>
    <div class="wrapper">
      <ul>
        <li class="facebook"><a href="home.html"><i class="fa fa-home fa-2x" ></i></a></li>
      </ul>
    </div>
  </body>
</html>
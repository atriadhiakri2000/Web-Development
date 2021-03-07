<?php require_once("include/DB.php") ?>
<?php require_once("include/function.php") ?>
<?php require_once("include/session.php") ?>
<?php 
  if(isset($_POST["submit"]))
  {
    $emailid = mysqli_real_escape_string($connection, $_POST["emailid"]);
    $password = mysqli_real_escape_string($connection, $_POST["password"]);
    if(empty($emailid) && empty($password))
    {
      $_SESSION["message"] = "All Feilds Must be Filled Out";
      Redirect_to("login.php");
    }
    else
    {
        if(confirmacc())
        {
            $foundacc = loginsucc($emailid, $password);
            if ($foundacc)
            {
              $_SESSION["user_id"] = $foundacc['id'];
              $_SESSION["user_name"] = $foundacc['username'];
              $_SESSION["user_email"] = $foundacc['email'];

              Redirect_to("welcome.php");
            }
            else
            {
                $_SESSION["message"] = "Invalid Email / Password";
                Redirect_to("login.php");
            }
        }
        else
        {
            $_SESSION["message"] = "Account Confirmation needed";
            Redirect_to("login.php");
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
      <title>Login Now</title>
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
            <a href="#">Login UP</a>
          </h2>
        </center>
        <hr>
        <form name="myform" action="login.php" method="post">
        <center>
            <div> 
              <input type="email" name="emailid" placeholder="Email Id" value="">
              <input type="password" name="password" placeholder="Password">
            </div>
              <input type="submit" name = "submit" value = "Login" placeholder = "Submit" >
              <a href="forgotpass.php"><input type="button" value = "Forgot Password" ></a>
              <!-- <a href="forgotpass" class="button">Forgot Password</a> -->
        </center>
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
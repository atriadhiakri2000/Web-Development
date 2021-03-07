<?php require_once("include/DB.php") ?>
<?php require_once("include/function.php") ?>
<?php require_once("include/session.php") ?>
<?php 
  if(isset($_POST["submit"]))
  {
    $emailid = mysqli_real_escape_string($connection, $_POST["emailid"]);
    // echo $emailid;
    if(empty($emailid))
    {
      $_SESSION["message"] = "All Feilds Must be Filled Out";
      Redirect_to("forgotpass.php");
    }
    elseif(!checkemail($emailid))
    {
    //   echo $emailid;
      $_SESSION["message"] = "Email Not Found.";
    //   Redirect_to("userreg.php");
    }
    else
    {
      global $connectingdb;
      $query = "SELECT * FROM admin_panel WHERE email = '$emailid'";
      $execute = mysqli_query($connection, $query);
      if($admin = mysqli_fetch_array($execute))
      {
        $admin["username"];
        $admin["token"];
        echo $token;
        $body = 'Hi' .$$admin["username"]. 'Here is the link to reset account password
        http://localhost/USER_REG/resetpassword.php?token=' .$admin["token"];
        if(mail($emailid, 'Confirmation', $body , 'From: atriadhikarinsec@gmail.com'))
        {
            $_SESSION["successmessage"] = "Check Email For Reseting Password";
            Redirect_to("login.php");
        }
        else
        {
          $_SESSION["message"] = "Something went wrong.";
        //   Redirect_to("userreg.php");
        }
  
      }
      else
      {
        $_SESSION["message"] = "Something Went Wrong";
        // Redirect_to("userreg.php");
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
      <title>Forgot password</title>
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
            <a href="signup.html">Recover Password</a>
          </h2>
        </center>
        <hr>
        <form name="myform" action="forgotpass.php" method="post">
        <center>
            <div> 
              <input type="email" name="emailid" placeholder="Email Id" value="">
            </div>
              <input type="submit" name = "submit" value = "Submit" placeholder = "Submit" >
        </center>
              <br>
        </form>
      </div>
    </div>
    <div class="wrapper">
      <ul>
        <li class="facebook"><a href="login.html"><i class="fa fa-home fa-2x" ></i></a></li>
      </ul>
    </div>
  </body>
</html>
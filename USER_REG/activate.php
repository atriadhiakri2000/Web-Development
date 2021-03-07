<?php require_once("include/DB.php") ?>
<?php require_once("include/function.php") ?>
<?php require_once("include/session.php") ?>
<?php 

    $connection = mysqli_connect('localhost', 'root', '');
    $connectingdb = mysqli_select_db($connection, "regsystem");
    if (isset($_GET['token']))
    {
        $tokenfromurl = $_GET['token'];
        $query = "UPDATE admin_panel SET active = 'On' WHERE token = '$tokenfromurl'";
        $execute = mysqli_query($connection, $query);
        if($execute)
        {
            $_SESSION["successmessage"] = "Account Activated Successfully";
            Redirect_to("login.php");
        }
        else
        {
            $_SESSION["message"] = "Something went wrong. Try again.";
            Redirect_to("userreg.php");
        }
    }

?>
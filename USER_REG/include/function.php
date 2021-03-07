<?php require_once("include/DB.php") ?>
<?php require_once("include/session.php") ?>

<?php

    function Redirect_to($newlocation)
    {
        header("Location: " .$newlocation);
        exit;
    }

    function passwordencryption($password)
    {
        echo "HI";
        $blowfish = "$2y$10$";
        $saltlength = 22;
        $salt = generatesalt($saltlength);
        echo "Length : " .strlen($salt);
        $formatingblowfishwithsalt = $blowfish.$salt;
        echo "<br>";
        echo $formatingblowfishwithsalt;
        $hash = crypt($password, $formatingblowfishwithsalt);
        echo "<br>";
        return $hash;
    }

    function generatesalt($saltlength)
    {
        $unirandomstr = md5(uniqid(mt_rand(), true));
        $basestr = base64_encode($unirandomstr);
        $modstr = str_replace("+", ".", $basestr);
        $salt = substr($modstr, 0, $saltlength);
        return $salt;
    }

    function passwordcheck($pass, $existinghash)
    {
        $hash = crypt($pass, $existinghash);
        if ($hash === $existinghash)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function checkemail($email)
    {
        // echo $email;
        $connection = mysqli_connect('localhost', 'root', '');
        $connectingdb = mysqli_select_db($connection, "regsystem");
        $query = "SELECT * FROM admin_panel WHERE email = '$email'";
        $execute = mysqli_query($connection, $query);
        // echo $execute;
        if (mysqli_num_rows($execute) > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function loginsucc($email, $password)
    {
        $connection = mysqli_connect('localhost', 'root', '');
        $connectingdb = mysqli_select_db($connection, "regsystem");
        $query = "SELECT * FROM admin_panel WHERE email = '$email'";
        $execute = mysqli_query($connection, $query);
            if($admin = mysqli_fetch_assoc($execute))
            {
                if(passwordcheck($password, $admin["password"]))
                {
                    return $admin;
                }
                else
                {
                    return null;
                }
            }
    }

    function confirmacc()
    {
        $connection = mysqli_connect('localhost', 'root', '');
        $connectingdb = mysqli_select_db($connection, "regsystem");
        $query = "SELECT * FROM admin_panel WHERE active = 'ON'";
        $execute = mysqli_query($connection, $query);
        if (mysqli_num_rows($execute) > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function login()
    {
        if(isset($_SESSION["user_id"]))
        {
            return true;
        }
    }

    function confirmlogin()
    {
        if(!login())
        {
            $_SESSION["message"] = "You have to login.";
            Redirect_to("login.php");
        }
    }


?>
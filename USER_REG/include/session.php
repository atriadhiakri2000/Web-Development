<?php
    session_start();
    function Message()
    {
        if(isset($_SESSION['message']))
        {
            $output = "<div class =\"message\">";
            $output .= htmlentities($_SESSION["message"]);
            $output .= "</div>";
            $_SESSION["message"] = null;
            return $output;
        }
    }

    function succMessage()
    {
        if(isset($_SESSION['successmessage']))
        {
            $output = "<div class =\"successmessage\">";
            $output .= htmlentities($_SESSION["successmessage"]);
            $output .= "</div>";
            $_SESSION["successmessage"] = null;
            return $output;
        }
    }


?>
 
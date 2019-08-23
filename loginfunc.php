<?php

//The log in function being applied to the log in button

if(($_POST['username'] == "user1") && ($_POST['password'] == "pass1"))

    { 

    header('Location: start.php');

    }


    else


    {
      echo ("incorrect");

    }



?>

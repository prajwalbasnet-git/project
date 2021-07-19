<?php
 if($_POST["sb"]=="LOGIN")
 {
     echo "login";
 }
 if($_POST["sb"]=="SIGNUP")
  {
      header ("Location: signup.php");
  }
?>
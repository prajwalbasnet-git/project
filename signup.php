<?php
include 'database.php';
$fnameerr=$lnameerr=$unameerr=$pwerr=$emerr="";
if (isset($_POST['submit']))
{
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$uname=$_POST["uname"];
$pw=$_POST["pw"];
$pw2=$_POST["pw2"];
$phn=$_POST["phn"];
$em=$_POST["em"];
$sql = "SELECT Username FROM user WHERE  Username='$uname'";
$result = $conn->query($sql);

   if ($result->num_rows > 0)
       {
  
         $unameerr="username already exist";
       }
   else 
       {
          $unameerr="";
            if ($pw2==$pw)
                 {
                    $pwerr="";
                    $sqle = "SELECT Email FROM user WHERE  Email='$em'";
                    $resulte = $conn->query($sqle);
                         if ($resulte->num_rows > 0)
                            {
               
                                $emerr="Email already exist";
                             }
                         else
                             {
                                 $emerr="";
                                 session_start();
                                 $_SESSION['fname']=$fname;
                                 $_SESSION['lname']=$lname;
                                 $_SESSION['uname']=$uname;
                                 $_SESSION['phn']=$phn;
                                 $_SESSION['em']=$em;
                                 $_SESSION['pw']=$pw;
                                 
                                 if ($_POST['gender']=="male")
                                    {
                                        $gen="male";        
                                    }
                                elseif ($_POST['gender']=="female")
                                    {
                                         $gen="female";
                                    }
                                        else
                                    {
                                         $gen="other";
                                    }
                                 $_SESSION['gender']=$gen;
                                 
                                 header ("Location: otp.php");
                             }
        
                  }
            else
                  {
                     $pwerr="Password doesnot match";
        
                  } 
         }
}
?>
<!DOCTYPE html>
<html>
<head >
<neta name="viewport" content ="width = device-width , initial-scale=1.0">
<style>
.error {color: red;}
</style>
</head>
<body style="background-image: url('pic4.jpg');text-align:center;">
<fieldset>
<legend>
<h1 style="text-align:center;">WELCOME TO SIGN IN PAGE</h1>
</legend>
<h3><span class="error">* required field</span></h3>

<form  method="post">
<label for ="first">
First Name:
</label> <br><input type="text" name="fname" placeholder="Enter First Name" id="first" required>
<span class="error">*</span><br><br>
<label for ="last">
Last Name:
</label><br> <input type="text" name="lname" placeholder="Enter Last Name" id="last" required >
<span class="error">*</span><br><br>
<label for ="user">
Choose User Id:
</label><br><input type="text" name="uname" placeholder="user id" id="user" required >
<span class="error">*</span><br>
<span class="error"><?php echo $unameerr ; ?></span><br>
<label for ="pass">
Password:
</label><br><input type="password" name="pw"placeholder="Enter password" id="pass"required >
<span class="error">*</span><br><br>
<label for ="repass">
Re-Password:
</label><br><input type="password" name="pw2"placeholder="Enter password again"  id="repass" requiredd>
<span class="error">*</span><br>
<span class="error"><?php echo $pwerr ; ?></span><br>
<label for ="phnbr">
Phone number:
</label><br><input type="number" name="phn"placeholder="Enter phone nbr" id="phnbr" >
<br><br>
<label for ="ema">
E-mail:
</label><br><input type="email" name="em"placeholder="Enter Email " id="ema"required>
<span class="error">*</span><br>
<span class="error"><?php echo $emerr ; ?> </span><br>
Select your Gender: <br>
<input type ="radio" name ="gender" value ="male" id="mal">

<label for ="mal">
Male </label>
<input type ="radio" name ="gender" value ="female" id="fmal">
<label for ="fmal">
Female 
</label>
<input type ="radio" name ="gender" value ="other" id="other">
<label for ="other">
Other 
</label>
<br>
<br>
<input type="submit" name="submit" value ="Register">
</form>
</fieldset>

</body>
</html>
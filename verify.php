<?php
session_start();

$otperr="";



if (isset($_POST['sb']))
{
   
   if($_POST['sb']=="Resend")
    {
       
       
     header("Location:otpr.php");
       
    }
    if($_POST['sb']=="Verify")
    {
      
       if($_POST["otp"]==$_SESSION['otp'])
       {
         header ("Location:newuser.php");
       }
       else
       {
          $otperr="Your otp doesnot match";
          
       }
    }
}
    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Verification page </title>
    <style>
    .error {color:red;}
    table ,th,td
    {
      border: 1px   solid black;
    }
    </style>
  </head>
  <body>
   <h2 style="text-align:center";> verification page </h2>
   <form method="post">
   <div class = "container my-4">
   
    <table  style="width:400px ; background-color:gray;" align=center>
       <tr>
           <th><h3 style="text-align:center;"> Email verification </h3> </th>
        </tr>
        
        <tr>
           <th><p style="text-align:center;"> OTP code is send to your email </p> </th>
        </tr>
        <tr>
           <th><div class = "container my-4"><p align=center> <input type="text" name="otp" placeholder="Enter otp here"></p><p style="text-align:center;"><span class="error"><?php echo $otperr ?></span></p><p align=center><input type="submit" name="sb" value ="Verify"></p></div> </th>
        </tr>
        
        <tr>
           <td><div class = "container my-4"><b>Didn't recieved code?<b><input type="submit" name="sb" value ="Resend" ></div></td>
        </tr>
      

    </table>
    </div>
    </form>
  
    
    
  </body>
</html>


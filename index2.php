<!DOCTYPE html>
<html>
<head>
<div class="alert alert-success" role="alert">
   Your account is created please login to continue.
 </div>
<style>
table, td {
   border: 1px solid green ;
}
</style>
</head>
<body style="background-image: url('pic3.jpg');">
<h1 style="text-align:center;">LOGIN PAGE</h1>

<form  action="formhandle.php" method="post">
<table align=center>
  <tr>
    <th colspan="2"><h3 style="text-align:center;">Username:</h3>
         <h3 style="text-align:center;"><input type="name" name="id" placeholder="username"></h3></th> 
  </tr>
  <tr>
    <th colspan="2"><h3 style="text-align:center;">Password:</h3>
        <h3 style="text-align:center;"><input type="password" name="pw" placeholder="password"></h3></th>
  </tr>
  <tr align=center>
      <td> <input type="submit" name="sb" value="LOGIN"></td>
      <td ><input type="submit" name="sb" value="SIGNUP"></td>
</table>
</form>
</body>
</html>

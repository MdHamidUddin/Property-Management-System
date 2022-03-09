<?php include "..\control\customerloginvalidation.php";
if(isset($_SESSION["Email"])){

header("location: Customer.php");
}

else echo $LoginInfo;
    ?>

<!DOCTYPE html>
<html>
<head>
<script src="..\javaScript\LoginValidation.js"></script>
<link rel="stylesheet" type="text/css" href="../css/Login.css">
<title>Login Form </title>

</head>
<body style="background-color:#2193b0 ">

<h1 align="Center">Customer Login</h1>
<form action="" method="post">
<tr>
<td>

<table>

<tr>

<h3> <a href="Registration.php">Registration</a></h3>
<h3><a href="..\..\admin\MainPage.php">Home</a></h3>
<br>
<td><p  style="background-color:orange;"> Email :  </td>
<td><input type="text"  name="email"><?php echo  $Val_Email;?> </td>
</tr>


<tr>
<td><p  style="background-color:orange;">Password :  </td>
<td><input type="password"  name="password"><?php echo $Val_Password;  ?></td>
</tr>


<tr>
<td> <input type="submit" name="Login"> 
<input type="reset" name="Reset"></td>
<td>


</td>
</tr>
</table>

</form>




</body>
</html>
<?php include "..\Control\CustomerRegValidation.php"  ?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/updateprofile.css">

<body>
<title>Registration Form </title>

</head>
<body style="background-color:#2193b0 ">
<script src="../javaScript/RegValidation.js"></script>
<h1 align="Center">Customer Sign Up</h1>
<form action="..\control\process.php" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
<tr>
<td>

<table>
	<center>
<tr>	
<h3> <p  style="background-color:orange;"><a href="Login.php">Login</a></h3>
 <h3><p  style="background-color:orange;"><a href="..\..\admin\MainPage.php">Home</a></h3>
 <br>
<td><p  style="background-color:orange;"><label for="fname ">Full name : </label></td>
<td><input type="text" id="name" name="fname"><?php echo $Val_Name; ?><p id="errorname"> </p></td>
</tr>


<tr>
 <td><p  style="background-color:orange;"><label for="email ">Email : </label></td>
 <td><input type="text" name="email" id="email"><?php  echo $Val_Email; ?> <p id="erroremail"> </p></td>
</tr>


<tr>
 <td><p  style="background-color:orange;"><label for="password ">Password : </label></td>
 <td><input type="password" name="password" id="password"><?php  echo $Val_Pass; ?><p id="errorpass"> </p></td>
</tr>


<tr>
 <td><p  style="background-color:orange;"><label for="ConfirmPassword ">Confirm Password : </label></td>
 <td><input type="Password" name="ConfirmPassword" id="confPassword"><?php  echo $Val_ConfPass; ?><p id="errorconfPass"> </p> </td>
</tr>


<tr>
<td><p  style="background-color:orange;">Phone: </td>
<td> <input type="text"  id="phone" name="phone"><?php echo  $Val_Phone;?><p id="errorphone"> </p></td>
</tr>

<tr>
 <td><p  style="background-color:orange;"><label for="Address ">Address : </label></td>
 <td><textarea rows="7" cols="25" name="Address" id="address"></textarea><?php echo  $Val_Add;?><p id="erroraddress"> </p></td>
</tr>

<tr>
<td><p  style="background-color:orange;"> Gender : </td>
<td>
<input type="radio" name="gender" value="Male"> Male 
<input type="radio" name="gender" value="Female"> Female 
<input type="radio"  name="gender" value="Other"> Other <p id="errorgender"> </p>
<?php echo $Val_Gender;?>
</td>
</tr>


<tr>
<td><p  style="background-color:orange;"> <label for="file ">Please Choose a photo: </label> </td>
<td><input type="file" name="fileupload"></td>
</tr>

</center>
<tr>
<td> <input type="submit" name="Submit"> 
<input type="reset" name="Reset">
</td>

</tr>

</table>

</form>
</body>
</html>
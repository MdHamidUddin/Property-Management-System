<?php 

//include "..\control\SearchValidation.php";
if(isset($_SESSION["Email"])){

    header("location: customer.php");
}
?>

<!DOCTYPE html>
<html>
<head>

<script src="../javaScript/Search.js"> </script> 

<link rel="stylesheet" type="text/css" href="../css/design1.css">
</head> 
<div class= "header sticky">
<h1> Property Search </h1>
</div> 

<div class="topnav">
<a href="customer.php">Back </a>
</div> 

<body style="background-color:#2193b0 ">
<div> 

Property Name: <input type=text name="pname" placeholder="Enter Your Search Property Name" id="pname" onkeyup ="showproperty()" ><br>
<p id="mytext"></p> 


</div> 
</body>
</html>


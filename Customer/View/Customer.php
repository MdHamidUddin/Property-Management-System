<?php
session_start();



echo "<u><h1 align='center'> Customer Profile Information </h1></u>";




?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../css/customer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script >
  $(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});

$(document).ready(function(){
  $("#flip2").click(function(){
    $("#panel2").slideToggle("slow");
  });
});

</script>
</head>
<body style="background-color:#2193b0 ">
<table>
  <tr>


  <td>

<div id="flip">
<fieldset>
<legend>Profile Information</legend>
<div id="panel">
<?php echo "<h3> Name : ".$_SESSION['Name']." </h3>";
echo "<h3> Email :".$_SESSION['Email']."</h3>";
?>
</div>
</fieldset>
</div>
</td>





  <td>

<div id="flip2">
<fieldset>
<legend>Customer Operation</legend>
<div id="panel2">
<a href = "updateprofile.php"> Update Profile </a><br>
<a href = "searchproperty.php"> Search Agent's Property </a><br>
<a href = "searchSellerproperty.php"> Search Seller's Property </a><br>
<a href = "showsellerproperty.php">All Seller's Property </a><br>
<a href = "showAgentproperty.php"> All Agents's Property </a><br>
<a href = "ContactAgent.php"> Contact With Agent</a><br>
<a href="../control/logout.php">logout</a><br>

</div>
</fieldset>
</div>
</td>


</tr>





</body>

</html>


<html>
  <head>
  <link rel="stylesheet" type="text/css" href="../css/Admin.css">
</head>
<body style="background-image: url('background.jpg');">
<div class= "header sticky">
<h2>Here All Seller's Message</h2>
</div>
<?php
include "../control/AgentReqCount.php";
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowAll($conobj,"sms");

if ($userQuery->num_rows > 0) {
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $Id=$row["msg_id"];
      $Owner_Id=$row["owner_id"]; 
      $Topic=$row["topic"];
      $Msg=$row["message"];
 
      echo "<fieldset> <h2><b>Message Id : </b>".$Id."<br>";
      echo "<b>Owner Id : </b>".$Owner_Id."<br>";
      echo "<b>Topic : </b>".$Topic."<br>";
      echo "<b>Message : </b>".$Msg."</h2></fieldset><br><br><br>";
  } 
}

?>

</body>

</html>
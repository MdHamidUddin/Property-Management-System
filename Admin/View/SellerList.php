<html>
  <head>
  <link rel="stylesheet" type="text/css" href="../css/updateprofile.css">
</head>
<body style="background-image: url('background.jpg');">

<div class= "header sticky">
    <h1>Seller List </h1> 
</div>

<div class="topnav">
<a href="Admin.php">Back </a>
<a href="SearchSeller.php">Search Seller </a>
<a href="../control/logout.php"> logout</a>
</div>
</body>
</html>

<?php 
include "../model/databaseConnection.php";

$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowAll($conobj,"owner");  




function ShowAdmin()
{
    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->ShowAll($conobj,"owner");     
echo "
<table border='1'>
<tr>
<th style='background-color:#a3f0cd;'>  Name</th>
<th style='background-color:#a3f0cd;'>  Username</th>
<th style='background-color:#a3f0cd;'>  Email</th>
<th style='background-color:#a3f0cd;'>  Mobile</th>
<th style='background-color:#a3f0cd;'> Address </th>
<th style='background-color:#a3f0cd;'> Gender </th>
<th style='background-color:#a3f0cd;'> Profile Picture </th>

</tr>";
    if ($userQuery !== false && $userQuery->num_rows > 0) {
        while($row = $userQuery->fetch_assoc()) {



            echo "
            <tr>
            <td style='background-color:#a3f0cd;'> ". $row["name"]." </td>
            <td style='background-color:#a3f0cd;'> ". $row["username"]." </td>
            <td  style='background-color:#a3f0cd;'> ". $row["email"] ."</td>
            <td style='background-color:#a3f0cd;'> ". $row["phone"]." </td>
            <td style='background-color:#a3f0cd;'> ". $row["address"]." </td>
            <td style='background-color:#a3f0cd;'> ". $row["gender"]." </td>
            <td>" .  "<img src='".'../../PropertyOwner/assets/'.$row['photo']."' width='15%'> <td>";
        }
    }
}
 


if ($userQuery->num_rows > 0)
{
    ShowAdmin();
}
else
{
    echo "<br>No Seller Found<br>";    
    
}
$connection->CloseCon($conobj);


?>
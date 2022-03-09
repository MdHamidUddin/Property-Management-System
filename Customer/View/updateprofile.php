
<?php
session_start();
include "..\model\DatabaseConnection.php";
include('../control/updatecheck.php');
$User="";
$radio1=$radio2=$radio3="";
$FullName=$Email=$Phone=$Address=$Date=$photo="";
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowData($conobj,"customer_reg",$_SESSION["Email"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $FullName=$row["FullName"];
      $Email=$row["Email"];
      $Phone=$row["Phone"];
      $Address=$row["Address"];
      $photo=$row["File_Path"];

      if(  $row["Gender"]=="Female" )
      {
           $radio1="checked"; 
      }

      else if($row["Gender"]=="Male")
      {
           $radio2="checked"; 
    }
      else
      {
          $radio3="checked";
      }


  } 
}



?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="../css/updateprofile.css">
</head>
<body style="background-color:#2193b0 ">

<form action='' method='post'   enctype="multipart/form-data">
  <table> 
    <tr><td> <p  style="background-color:orange;"> Update Image </p></td>
    <td><input type="file" name="fileupload" > </td> </tr>


    <tr><td> <p style="background-color:orange;"> Email</p> </td>
    <td><input type="text" name="Email" value="<?php echo $Email;?>"  disabled  style="background-color:white;"> </td> </tr>
   
    <tr>
      <td><p style="background-color:orange;">FullName : </p></td>
   <td> <input type='text' name='FullName' value="<?php echo $FullName; ?>" > <?php echo $ValidName; ?><br><br></td></tr>
   <tr>
      <td><p style="background-color:orange;">Phone : </p></td>
      <td> <input type='text' name='Phone' value="<?php echo $Phone; ?>" > <?php echo $ValidPhone;?><br><br></td></tr>

      <tr>
      <td><p style="background-color:orange;">Address : </p></td>
       <td> <textarea rows="3" cols="40" name="Address" value='$Address'> <?php echo $Address;?> </textarea> <?php echo $ValidAddress;?><br><br> </td>
</tr>
  
      <tr>
      <td><p style="background-color:orange;">Gender:</p></td>
     <td><input type='radio' name='gender' value='Female'<?php echo $radio1; ?>> <h4 style="background-color:white;">Female </h4>
     <input type='radio' name='gender' value='Male' <?php echo $radio2; ?> > <h4 style="background-color:white;">Male </h4>
     <input type='radio' name='gender' value='Other'<?php  $radio3; ?> > <h4 style="background-color:white;">Other   </h4></td>  </tr> <?php echo $validateradio;?><br><br>
   
     <div class="mydiv"><img src="<?php echo $photo; ?>"  alt="" class="class1-img"></div>
    
     <tr><td>
     <input name='update' type='submit' value='Update'>  
     <input name='Delete' type='submit' value='Delete Customer'>
</td></tr>
     <?php// echo $error; ?>
</div>
</body>
</html>
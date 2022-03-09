<?php
class DatabaseConnection{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pms";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }

 function CheckUser($conn,$table,$Email,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE Email='". $Email."' AND Password='". $password."'");

if ($result->num_rows > 0)
{
    echo "Login Successful <br>";
}

else {
echo "Login Failed !<br>";
}
return $result;
}


 

 function InsertData($conn,$table,$Name,$email,$Password,$Phone,$Address,$validateradio,$target_File)
 {

    $stmt=$conn->prepare("INSERT INTO Customer_reg (FullName,Email,Password,Phone,Address,Gender,File_Path) VALUES(?,?,?,?,?,?,?)"); 
    $stmt->bind_param("sssssss",$Name,$email,$Password,$Phone,$Address,$validateradio,$target_File);
    if($stmt->execute())
    {
        echo "User Added Successfully!!";
    }
    else 
    {
        echo "Already have an account!!!<br>";
        echo $stmt->error;
    }
    $stmt->close();
  
 }

 function ContactAgent($conn,$table,$Email,$Subject,$Message)
 {

    $stmt=$conn->prepare("INSERT INTO C_SMS (Email,Subject,Message) VALUES(?,?,?)"); 
    $stmt->bind_param("sss",$Email,$Subject,$Message);
    if($stmt->execute())
    {
        echo "Message Sent Successfully!!";
    }
    else 
    {
        echo "Error !!!<br>";
        echo $stmt->error;
    }
    $stmt->close();
  
 }





 function Search($conn,$table,$username)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username);
    return $result;
 }

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
 function ShowData($conn,$table,$Email)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Email like '".$Email."' ");
    return $result;
}
 function UpdateUser($conn,$table,$Name,$Email,$Phone,$Address,$Gender)
 {
    $sql = "UPDATE $table SET FullName='$Name',Phone='$Phone',Address='$Address',Gender='$Gender' WHERE Email='$Email'";
    //$stmt->execute()
      if ($conn->query($sql) === TRUE) {

         $result= TRUE;
     } 
     else {
         $result= FALSE ;

     }
     return  $result;
 }
 function DeleteUser($conn,$table,$Email)
 {
     $sql="DELETE from $table where Email like '$Email'";
     if ($conn->query($sql) === TRUE) {

        $result= TRUE;
    } 
    else {
        $result= FALSE ;

    }
    return  $result;
 }
 function SearchProperty($conn,$table,$Pname)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE P_Name like '". $Pname."%' ");
    return $result;
    
}


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
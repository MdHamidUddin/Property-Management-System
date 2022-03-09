<?php
$user=$_SESSION['current_user'];
if (session_status() == PHP_SESSION_NONE) 
{	
    session_start();
}	
if(!isset($_SESSION['flag'])){
		header('location: login.php');
	}
else{
	echo '<ul class="navbar-nav me-auto">';
                
	echo'</ul><span class="navbar-text actions"> <a class="login">' ;
	$photo=$user['photo'];
	echo"<span>";
	echo "<img src='{$photo}' width='100px' class=\"img-fluid img-thumbnail\">";
	echo "	</span>";	
	echo $user['name'];
	echo' 🟢</a><a class="btn btn-light action-button" role="button" href="../controller/signout.php">Sign Out</a></span>';
	echo '</div>';
	echo '</div>';
	echo '</nav>';  
}	

?>


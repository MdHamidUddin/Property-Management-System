<?php 
$title = "Owner Home";

require_once('header.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>   
            <?php 
            if(!isset($_SESSION['flag'])){
              
            echo '<ul class="navbar-nav me-auto"></ul><span class="navbar-text actions"> <a class="login" href="login.php">Log In</a><a class="btn btn-light action-button" role="button" href="signup.php">Sign Up</a></span>';
            echo '</div>';
            echo '</div>';
            echo '</nav>';  
            require_once('login.php');

            
        
           
            }       

            

            else 
            {   require_once('sessionheader.php');
                $user=$_SESSION['current_user'];
                echo '</nav>';  
                echo '<div>';
                echo '<div class="container" style="text-align: left;"> <h7><a href="add.php" class="link-dark">Add Product</a></h7></div>';
                echo '<div class="container" style="text-align: left;"> <h7><a href="viewProducts.php" class="link-dark">View Products</a></h7></div>';
                echo '<div class="container" style="text-align: left;"> <h7><a href="updateProducts.php" class="link-dark">Update Products</a></h7></div>';
                echo '<div class="container" style="text-align: left;"> <h7><a href="contactAdmin.php" class="link-dark">Contact Admin</a></h7></div>';
                echo '</div>';
                
                
                
                
            }
            ?>
           
            
                
  

   
    


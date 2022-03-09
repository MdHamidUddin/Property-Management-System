<?php 
$title = "Edit Product";

require_once('header.php');

require_once('../controller/product.php');
$product = fetchProduct($_GET['id']);
require_once('sessionheader.php');


?>
 </nav>
 <div class="container" style="text-align: center;">
     
        <form method="post" action="../controller/editProductCheck.php" enctype="multipart/form-data">

        <div class="illustration" ></div>
            <div class="mb-3">
                <h4 class="text-center bg-dark text-white">Edit Product</h4>
            </div>
            <div class="mb-2" > <span class="text-dark">Name: </span><input class="form-control" type="text" value="<?php echo $product['P_Name'];?>" name="productName"></div>
            <div class="mb-2"><span class="text-dark">Description:</span><input class="form-control" type="text" value="<?php echo $product['P_Desc'];?>" name="description"></div>
            <div class="mb-2"><span class="text-dark">Category:</span><input class="form-control" type="text" value="<?php echo $product['P_Cate'];?>" name="category"></div>
            <div class="mb-3"><span class="text-dark">Price:</span><input class="form-control" type="text" value="<?php echo $product['P_Price'];?>" name="price"></div>
           
            <div class="mb-3">

                <span>Image </span>

                <img src="<?php echo $product['P_image'];?>" id="previewImg" width="300px">
                <input class="btn btn-success" type="file" name="file" id="file" onchange="document.getElementById('previewImg').src = window.URL.createObjectURL(this.files[0])">

            </div>
            
            <div class="mb-1">
                
            <button class="btn btn-success d-block w-100" type="submit" value="<?php echo $_GET['id'];?>" name="submit">Edit Product</button></div>

        </form>
 </div>
      


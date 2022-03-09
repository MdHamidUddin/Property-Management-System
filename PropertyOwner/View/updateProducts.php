<?php ;
$title='View Products';

require_once('header.php');
require_once('../controller/product.php');
$conn = getConnection();
require_once('sessionheader.php');

?>
</nav>
<div class="container" style="text-align: center;">
<div  class="mb-3">
  
    <div class="bg-dark text-white"><h2>Update Products </h2></div>


<div class="container" style="text-align: center;">

      <table class="table " align="center" cellpadding="8" border="1">
        <thead class="thead-dark">
      <tr>
              <th  scope="col">ID</th>
              <th scope="col">NAME</th>
              <th scope="col">Description<br></th>
              <th scope="col">Category</th>
              <th scope="col">Price<br></th>
              <th scope="col">Image </th>     
              <th scope="col">Actions </th>     
      </tr>
      </thead>      
      <tbody>
          <?php $sql = "select * from product";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result))
          { 
              ?>
                <tr>
                <th  scope="row"><?php echo $row['P_ID']; ?></th>
                  <td><?php echo $row['P_Name']; ?></td>
                  <td><?php echo $row['P_Desc']; ?></td>
                  <td><?php echo $row['P_Cate']; ?></td>
                  <td><?php echo $row['P_Price']; ?></td>
                  <td><img src="<?php echo $row['P_image']; ?>" width="150px" height="150px"></td>
                  <td>
                <a class=<?php echo"\"btn btn-success\" href=\"../view/editProduct.php?id={$row['P_ID']}\" role=\"button\">Edit"; ?> </a> <br>
                <a class=<?php echo"\"btn btn-danger\" href=\"../controller/deleteProduct.php?id={$row['P_ID']}\" role=\"button\">Delete"; ?> </a>

                </td>
              
                </tr>	 
              <?php
              }
              ?>
              </tbody>
              </table>
      
    </div>
</div>

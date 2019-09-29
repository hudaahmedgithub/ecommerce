<?php 
include "inc/db.php";
session_start();
include "inc/top.php";
if(!isset($_SESSION["uid"]))
{
	header('location:loginn.php');
}
if(isset($_GET['del'])and isset($_SESSION["uid"]))
{
$del_id=$_GET['del'];
$del_query="DELETE FROM `products` WHERE `product_id` = $del_id";
	if(mysqli_query($conn,$del_query))
	{
		$success= "your product deleted";
	}
	else
	{
		$error= "it is error ocuuer";
	}

}
else
{
	echo "error";
}
?>
<body>

<!--Header-part-->
<?php require_once "inc/header.php";?>
<!--close-top-serch-->
<!--sidebar-menu-->
<?php
	
	require_once"inc/sidebar.php";
	?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index2.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> Products<a href="#" class="current"></a>Add Products</div>
    <h1>Products</h1>
      
    
  </div>
  <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add Product</h5>
            </div>
            <div class="widget-content nopadding">

				<br>
	<?php
		if(isset($_GET['edit']))
			{
			$edit_id=$_GET["edit"];
			$run_edit_id="select * from products where product_id='$edit_id'";
		$run_edit_id=mysqli_query($conn,$run_edit_id);
			if(mysqli_num_rows($run_edit_id)>0)
			{
				$run_edit_id=mysqli_fetch_array($run_edit_id);
			?>
	<form class="form-horizontal" method="post" 
	   action="process_p.php?update_product=<?php echo $edit_id;?>" enctype="multipart/form-data">
	 
          <div class="control-group">
                  <label class="control-label">Product Cat</label>
			 
			 	  <?php
			     if(isset($_GET['uerror']))
				 {
					 echo "<span
					 style='color:#900;'>".$_GET['uerror'].
					 "</span>";
				 }
			   else if(isset($_GET['usuccess']))
				 {
					 echo "<span style='color:#060;'>".$_GET['usuccess'].
					 "</span>";
				 }
			  else
			  {
				  echo " <span style='color:#006;font-weight:bold'>please fill all field
					 </span>";
			  }
			  
			  ?>
                  <div class="controls">
                  <select name="product-cat">
				  <option>select category</option>
				  <?php
				  $cat_query="select * from categories ";
				   $run_query=mysqli_query($conn,$cat_query);
				  
				 while($row=mysqli_fetch_array($run_query))
				 {
					 $p_cat_id=$row["cat_id"];
					 $p_cat_title=$row["cat_title"];
					 echo "<option value='$p_cat_id'>$p_cat_title</option>";
				 }
			
				  ?>
					  </select>
                </div>
			   
			  <label class="control-label">Product brand</label>
			 
                  <div class="controls">
                  <select name="product-brand">
				  <option>select brand</option>
				  <?php
				  $cat_query="select * from brands ";
				   $run_query=mysqli_query($conn,$cat_query);
				  
				 while($row=mysqli_fetch_array($run_query))
				 {
					 $p_brand_id=$row["brand_id"];
					 $p_brand_title=$row["brand_title"];
					 echo "<option value='$p_brand_id'>$p_brand_title</option>";
				 }
			
				  ?>
					  </select>
			  </div>
			  <label class="control-label">Product Name</label>
			 
                  <div class="controls">
                    <input type="text" name="up-prod-name" id="product_name" placeholder="update product name" value="<?php echo $run_edit_id['product_title'];?>"/> 
                </div>
			  <label class="control-label">Product Price</label>
			
                  <div class="controls">
                    <input type="text" name="up-prod-price" id="product_price" placeholder="update product price" value="<?php echo $run_edit_id['product_price'];?>"/> 
                </div>
			  <label class="control-label">Product desc</label>
			 
			  <div class="controls">
                    <input type="text" name="up-prod-desc" id="product_desc" placeholder="update product desc" value="<?php echo $run_edit_id['product_desc'];?>"/> 
                </div>
			 <label class="control-label">Product image</label>
			 
                  <div class="controls">
                    <input type="file" name="product-image" id="file" value="<?php echo $run_edit_id['product_title'] ;?>"/>
					  <br>
					  <img src="product_image/<?php echo $run_edit_id['product_image'];?>" width="100px" height="30px">
                </div>
			  <label class="control-label">Product Keywords</label>
		
                  <div class="controls">
                    <input type="text" name="up-prod-keywords" id="product_keywords" placeholder="update product keywords" value="<?php echo $run_edit_id['product_keywords'];?>"/> 
                </div>
	       </div>
       
                <div class="form-actions">
                  <input type="submit" value="Update Product" class="btn btn-danger" name="product-update"/>
                    </div>
				</form>
		<?php
		}}
				?>
			  </div>
		
				<!-- end add product-->
	  </div></div>
	<center>
		<h1 style="color:#a03;font-weight:bold;">Products</h1>
		
	</center>
	<table class="table table-bordered data-table table-striped">
              <thead>
                <tr>
                  <th>Product ID</th>
					<th>Product cat</th>
					<th>Product brand</th>
					<th>Product Name</th>
					<th>Product Price</th>
					<th>Product desc</th>
					<th>Product image</th>
					<th>Product keywords</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
				  <?php
                  $query="select * from products ";
				  $run_query=mysqli_query($conn,$query);
				  if(mysqli_num_rows($run_query)>0)
				  {
					while($row=mysqli_fetch_array($run_query))
					{
						$product_id=$row["product_id"];
					    $product_cat=$row["product_cat"];
						$product_brand=$row["product_brand"];
						$product_name=$row["product_title"];
						$product_price=$row["product_price"];
						$product_desc=$row["product_desc"];
						$file=$row["product_image"];
						$product_keywords=$row["product_keywords"];
					
				  ?>
                <tr class="gradeX">
                  <td><?php echo $product_id;?></td>                
                  <td><?php echo $product_cat;?></td>
					
					<td><?php echo $product_brand;?></td>
					<td><?php echo $product_name;?></td>
					<td><?php echo $product_price;?></td>
					<td><?php echo $product_desc;?></td>
					<td><img src="image/<?php echo $file;?>" width="60px"height="40px"></td>
					<td><?php echo $product_keywords;?></td>
				
   <td class="center">
 <a  href="products.php?edit=<?php echo $product_id;?>" class="btn btn-primary btn-mini">Edit</a>
	              
	   <a href="products.php?del=<?php echo $product_id;?>" class="btn btn-danger btn-mini">Delete</a></td></tr>
				  <?php
					}
				  }
					else
				  {
					  
				  }
        ?>
			
					</tbody></table>
     

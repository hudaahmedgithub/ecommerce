<?php 
include "inc/db.php";
session_start();
include "inc/top.php";
if(!isset($_SESSION["uid"]))
{
	header('location:loginn.php');
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
    <div id="breadcrumb"> <a href="index2.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> Ctegories<a href="#" class="current"></a>Add Categories</div>
    <h1>Categories</h1>
      
    
  </div>
  <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add Category</h5>
            </div>
            <div class="widget-content nopadding">
								
 <form class="form-horizontal" method="post" 
	   action="process_p.php" name="add_product" id="add_product" enctype="multipart/form-data">
	 
          <div class="control-group">
                  <label class="control-label">Product Name</label>
			 	  <?php
			     if(isset($_GET['error']))
				 {
					 echo "<span
					 style='color:#900;font-size:20px;'>".$_GET['error'].
					 "</span>";
				 }
			   else if(isset($_GET['success']))
				 {
					 echo "<span style='color:#060;'>".$_GET['success'].
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
			  <div class="controls">
                    <input type="text" 
						   name="product-name" id="product_name" placeholder="product name"/> 
                </div>
			  <div class="controls">
                    <input type="text" 
						   name="product-price" id="product_price" placeholder="product price"/> 
                </div>
			  <div class="controls">
                    <input type="text" 
						   name="product-desc" id="product_desc" placeholder="product desc"/> 
                </div>
			  <div class="controls">
                    <input type="file" 
						   name="product-image"  placeholder="product image" />
				
				  
                </div>
			  <div class="controls">
                    <input type="text" 
						   name="product-keywords" id="product_keywords" placeholder="product keywords"/> 
                </div>
	       </div>
	 
       
                <div class="form-actions">
                  <input type="submit"  value="Add Product" class="btn btn-info" name="add-product" />
                    </div>
				</form>
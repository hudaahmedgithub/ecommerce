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
	   action="inc/process_add.php" name="add_category" id="add_category" >
	 
          <div class="control-group">
                  <label class="control-label">Category Name</label>
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
                    <input type="text" name="cat-name" id="cat_name" placeholder="category name"/> 
                </div>
	       </div>
       
                <div class="form-actions">
                  <input type="submit" value="Add Category" class="btn btn-info" name="add-category"/>
                    </div>
				</form>
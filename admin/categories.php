<?php 
include "inc/db.php";
session_start();
include "inc/top.php";
require_once "inc/header.php";
require_once"inc/sidebar.php";
if(!isset($_SESSION["uid"]))
{
	header('location:loginn.php');
}
if(isset($_GET['del'])and isset($_SESSION["uid"]))
{
$del_id=$_GET['del'];
$del_query="DELETE FROM `categories` WHERE `cat_id` = $del_id";
	if(mysqli_query($conn,$del_query))
	{
		$success= "your category deleted";
	}
	else
	{
		$error= "it is error ocuuer";
	}

}
?>
<body>

<!--Header-part-->
<??>
<!--close-top-serch-->
<!--sidebar-menu-->
<?php
	
	
	?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index2.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> Ctegories<a href="#" class="current"></a>Add Categories</div>
    <h1>Categories</h1>
      
    
  </div>
  <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>show Category</h5>
            </div>
            <div class="widget-content nopadding">
				
 
				<br>
	<?php
		if(isset($_GET['edit']))
			{
			$edit_id=$_GET["edit"];
			$run_edit_id="select * from categories where cat_id='$edit_id'";
		$run_edit_id=mysqli_query($conn,$run_edit_id);
			if(mysqli_num_rows($run_edit_id)>0)
			{
				$run_edit_id=mysqli_fetch_array($run_edit_id);
			?>
	<form class="form-horizontal" method="post" 
	   action="inc/process.php?update_category=<?php echo $edit_id;?>" >
	 
          <div class="control-group">
                  <label class="control-label">Category Name</label>
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
                    <input type="text" name="up-cat-name" id="cat_name" placeholder="update category name" value="<?php echo $run_edit_id['cat_title'];?>"/> 
                </div>
	       </div>
       
                <div class="form-actions">
                  <input type="submit" value="Update Category" class="btn btn-danger" name="update-category"/>
                    </div>
				</form>
		<?php
		}}
				?>
			  </div>
		
				<!-- end add category-->
	  </div></div>
	<center>
		<h1 style="color:#a03;font-weight:bold;">Categories</h1>
		 <?php
			     if(isset($error))
				 {
					 echo "<span
					 style='color:#900;'>".$error
					 ."</span>";
				 }
			   else if(isset($success))
				 {
					 echo "<span style='color:#060;font-size:20px'>".$success
					 ."</span>";
				 }
			 else
			 {
				 echo "<span style='color:#060;font-size:20px'>if you deleted any item ,should message write here
					 </span>"; 
			 }
			  
			  ?>
	</center>
	<table class="table table-bordered data-table table-striped">
              <thead>
                <tr>
                  <th>Category ID</th>
					<th>Category Name</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
				  <?php
                  $query="select * from categories order by cat_id asc";
				  $run_query=mysqli_query($conn,$query);
				  if(mysqli_num_rows($run_query)>0)
				  {
					while($row=mysqli_fetch_array($run_query))
					{
						$cat_id=$row["cat_id"];
						$cat_name=$row["cat_title"];
					
				  ?>
                <tr class="gradeX">
                  <td><?php echo $cat_id;?></td>                
                  <td><?php echo $cat_name;?></td>
				
   <td class="center">
 <a  href="categories.php?edit=<?php echo $cat_id;?>" class="btn btn-primary btn-mini">Edit</a>
	              
	   <a href="categories.php?del=<?php echo $cat_id;?>" class="btn btn-danger btn-mini">Delete</a></td></tr>
				  <?php
					}
				  }
					else
				  {
					  
				  }
        ?>
			
					</tbody></table>
     

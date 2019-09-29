<?php
session_start();
include "db.php";
if(isset($_POST["category"]))
{
	$category_query="select * from categories";
	$run_query=mysqli_query($conn,$category_query);
	echo "	<div class='nav nav-pills nav-stacked'>
						<li style='background:#000;'><a href='#'><h4 style='color:#d03'>&nbsp;&nbsp;&nbsp;&nbsp;Categories&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4></a></li>";
	
	if(mysqli_num_rows($run_query)>0)
	{
		while($row=mysqli_fetch_array($run_query))
		{
			$cid=$row["cat_id"];
			$cat_name=$row["cat_title"];
			echo "<li><a href='#' cid='$cid' class='category'>$cat_name</a></li>";
		}
		echo "</div>";
	}
}
	// brands
	
	if(isset($_POST["brand"]))
{
	$brand_query="select * from brands";
	$run_query=mysqli_query($conn,$brand_query);
	echo "	<div class='nav nav-pills nav-stacked'>
						<li style='background:#000;'><a href='#'><h4 style='color:#d03'>&nbsp;&nbsp;&nbsp;&nbsp;Brands&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4></a></li>";
	
	if(mysqli_num_rows($run_query)>0)
	{
		while($row=mysqli_fetch_array($run_query))
		{
			$bid=$row["brand_id"];
			$brand_name=$row["brand_title"];
			echo "<li><a href='#' bid='$bid' class='selectBrand'>&nbsp;&nbsp;&nbsp;$brand_name</a></li>";
		}
		echo "</div>";
	}
		
		
}
if(isset($_POST["page"]))
{
	$sql="select * from products ";
	$run_query=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($run_query);
	$pageno=ceil($count/9);
	for($i=1;$i<=$pageno;$i++)
	{
		echo "<li><a href=''page='$i' id='page'>$i</a></li>";
	}
}

if(isset($_POST["product"]))
{
	$limit=9;
	if(isset($_POST["setPage"])){
		$pageno=$_POST["pageNumber"];
		$start=($pageno*$limit)-$limit;
}
	else
	{
		$start=0;
	}
	$product_query="select * from products ORDER BY RAND() limit $start,$limit";
    $run_query=mysqli_query($conn,$product_query);
if(mysqli_num_rows($run_query)>0)
	{
		while($row=mysqli_fetch_array($run_query))
		{
			$pro_id=$row["product_id"];
			$pro_cat=$row["product_cat"];
			$pro_brand=$row["product_brand"];
			$pro_title=$row["product_title"];
			$pro_price=$row["product_price"];
			$pro_image=$row["product_image"];
			echo "
			
			<div class='col-md-4'>
							<div class='panel panel-info'>
							<div class='panel-heading'>$pro_title</div>
					         <div class='panel-body'>
							   <img src='image/$pro_image' style='width:150px;height:200px;'>
							</div>
							<div class='panel-heading'>$.$pro_price
							<button style='float:right;background:#dc143c;' pid='$pro_id'
							id='product'
							class='btn btn-danger'>AddToCart</button>
								<br>	
					        </div>
					       </div></div>";
}
}
}

if(isset($_POST["get_selected_Category"])||
 isset($_POST["selectedBrand"])||
   isset($_POST["search"]))
{
if(isset($_POST["get_selected_Category"]))
	{
	$id=$_POST["cat_id"];
	$sql="select * from products where product_cat='$id'";
	}
else if(isset($_POST["selectedBrand"]))
	{
	$id=$_POST["brand_id"];
	$sql="select * from products where product_brand='$id'";
	}
else
	{
	$keyword=$_POST["keyword"];
	$sql="select * from products where product_keywords LIKE '%$keyword%'";
	}
	$run_query=mysqli_query($conn,$sql);
if(mysqli_num_rows($run_query)>0)
	{
		while($row=mysqli_fetch_array($run_query))
		{
			$pro_id=$row["product_id"];
			$pro_cat=$row["product_cat"];
			$pro_brand=$row["product_brand"];
			$pro_title=$row["product_title"];
			$pro_price=$row["product_price"];
			$pro_image=$row["product_image"];
			echo "
			
			<div class='col-md-4'>
							<div class='panel panel-info'>
							<div class='panel-heading'>$pro_title</div>
					         <div class='panel-body'>
							   <img src='image/$pro_image' style='width:150px;height:200px;'>
							</div>
							<div class='panel-heading'>$.$pro_price
							<button style='float:right;background:#dc143c;'
							id='product' pid='$pro_id' class='btn btn-danger'>AddToCart</button>
								<br>	
					        </div>
					       </div></div>";
}
		}

}
if(isset($_POST["addToProduct"]))
{
	$p_id=$_POST["proId"];
	$user_id=$_SESSION["uid"];
	$sql="select * from cart where p_id='$p_id' and user_id='$user_id'";
	$run_query=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($run_query);
	if($count>0)
	{
			echo "
	<div class='alert alert-danger'>
	<a href='#' class='close' data-dismiss='alert'
	   aria-label='close'>&times;</a><b>this product already exist !</b>
	</div>
	";
	}
	else
	{
		$sql="select * from products where product_id='$p_id'";
		$run_query=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($run_query);
		
		$id=$row["product_id"];
		$pro_name=$row["product_title"];
		$pro_image=$row["product_image"];
		$pro_price=$row["product_price"];
		$sql="
	INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES (NULL, '$p_id', '0', '$user_id', '$pro_name', '$pro_image', '1', '$pro_price', '$pro_price')";
		if(mysqli_query($conn,$sql))
		{
			echo "
	<div class='alert alert-success'>
	<a href='#' class='close' data-dismiss='alert'
	   aria-label='close'>&times;</a><b>Your Product is added to Cart !</b>
	</div>
	";
}
		
		
		
	}
}
if(isset($_POST["get_cart_product"])||isset($_POST["cart_checkout"]))
{
	$uid=$_SESSION["uid"];
	$sql="select * from cart where user_id='$uid' ";
	$run_query=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($run_query);
	
	if($count>0)
	{
		$no=1;
		$total_amount=1;
		while($row=mysqli_fetch_array($run_query))
		{   
			$id=$row["id"];
			$pro_id=$row["p_id"];
		    $pro_name=$row["product_title"];
			$pro_image=$row["product_image"];
			$qty=$row["qty"];
			$pro_price=$row["price"];
			$total=$row["total_amount"];
			$price_array=array($total);
	        $total_sum=array_sum($price_array);
			$total_amount=$total_amount+$total_sum;
			if(isset($_POST["get_cart_product"]))
			{
				echo "
			<div class='row'>
					  <div class='col-md-3'>$no</div>
					  <div class='col-md-3'><img src='image/$pro_image' width='50px' height='50px'></div>
					  <div class='col-md-3'>$pro_name</div>
					  <div class='col-md-3'>$.$pro_price</div>
				  </div>
				  <br>
			";
			$no=$no+1;
			}
			else
			{
				echo"
			<div class='row'>
		
					<div class='col-md-2'>
						<div class='btn-group'>
							<a href='#'class='btn btn-danger remove' remove_id='$pro_id'>
							<span class='glyphicon glyphicon-trash'></span></a>
							<a href='#'class='btn btn-info update' update_id='$pro_id'>
							<span class='glyphicon glyphicon-ok-sign'></span></a>
								</div>
							</div>
						
						<div class='col-md-2'>
			<img src='image/$pro_image' width='100px' height='100px'>
						</div>
						<div class='col-md-2'>
							$pro_name
						</div>
						<div class='col-md-2'>
			<input type='text' class='form-control qty' pid='$pro_id' id='qty-$pro_id' value='$qty'>
						</div>
						<div class='col-md-2'>
			<input type='text' class='form-control price' pid='$pro_id' id='price-$pro_id' value='$pro_price'>
						</div>
						<div class='col-md-2'>
			<input type='text' class='form-control total' pid='$pro_id' id='total-$pro_id' value='$total'> 
						</div>
					</div>
					<br>
					";	
			}
		}
		if(isset($_POST["cart_checkout"]))
		{
			echo "<div class='row'>
						<div class='col-md-8'>
						</div>
						<div class='col-md-4'>
							<b>total $total_amount</b>
						</div>
					</div>";
		
	}}
}
if(isset($_POST["removeFormCart"]))
{
	$pid=$_POST["removeId"];
	$uid=$_SESSION["uid"];
	$sql="delete from cart where user_id='$uid' and p_id='$pid'";
	$run_query=mysqli_query($conn,$sql);
	if($run_query)
	{
	 echo "
	<div class='alert alert-danger'>
	<a href='#' class='close' data-dismiss='alert'
	   aria-label='close'>&times;</a><b>Your product are removed from Cart !</b>
	</div>
	";
	}
}
if(isset($_POST["updateCart"]))
{
	$uid=$_SESSION["uid"];
	$pid=$_POST["updateId"];
	$price=$_POST["price"];
	$qty=$_POST["qty"];
	$total=$_POST["total"];
	$sql="update cart set qty='$qty',price='$price',total_amount='$total'where user_id='$uid' and p_id='$pid'";
	$run_query=mysqli_query($conn,$sql);
	if($run_query)
	{
	 echo "
	<div class='alert alert-info'>
	<a href='#' class='close' data-dismiss='alert'
	   aria-label='close'>&times;</a><b>Your product are updated Cart !</b>
	</div>
	";
	}
}
if(isset($_POST["cart_count"]))
{
	$uid=$_SESSION["uid"];
	$sql="select * from cart where user_id='$uid'";
	$run_query=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($run_query);
	echo $count;
}
?>
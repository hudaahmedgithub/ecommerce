
<?php
include"inc/db.php";
session_start();
if(!isset($_SESSION["uid"]))
{
	header('location:loginn.php');
}
//////////////// products////////

if(isset($_POST["add-product"]))
{
	$product_cat=$_POST["product-cat"];
	$product_brand=$_POST["product-brand"];
	$product_name=$_POST["product-name"];
	$product_price=$_POST["product-price"];
	$product_desc=$_POST["product-desc"];
	
      /*$product_image= move_uploaded_file($_FILES['file']['tmp_name'], realpath('product/'));
   /*
	$targetFile =basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $targetFile);*/
	
	$product_image=$_FILES['product-image']['name'];
	$temp_name1=$_FILES['product-image']['tmp_name'];
	
	move_uploaded_file($temp_name1, "product_image/$product_image");
					
	$product_keywords=$_POST["product-keywords"];
	
	/*if(empty($product_name))
	{header("location:products.php?error=product name required");
	}*/
	
		$query="INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES (NULL, '$product_cat', '$product_brand', '$product_name', '$product_price', '$product_desc', '$product_image', '$product_keywords')";
		if(mysqli_query($conn,$query))
		{
			header("location:products.php?success=products added");
			echo "qwerty";
		}
		else
		{
			echo "error";
		}
	}
	else
	{
		echo"no";
	}
		
	

/////////////////// Update Category///////
if(isset($_POST["product-update"]))
{
	$edit_id=$_GET['update_product'];
	$up_prod_cat=$_POST["up-prod-cat"];
    $up_prod_brand=$_POST["up-prod-brand"];
	$up_prod_name=$_POST["up-prod-name"];
	$up_prod_price=$_POST["up-prod-price"];
	$up_prod_desc=$_POST["up-prod-desc"];
	$product_image=$_FILES['product-image']['name'];
	$temp_name1=$_FILES['product-image']['tmp_name'];
	
	move_uploaded_file($temp_name1, "product_image/$product_image");
	//$up_prod_image=$_POST["up-prod-image"];
	$up_prod_keywords=$_POST["up-prod-keywords"];
	
	if(empty($up_prod_cat)and empty($up_prod_brand) and empty($up_prod_name) and empty($up_prod_price) and empty($up_prod_desc) and empty($product_image)and empty($up_prod_keywords))
	{
		header("location:products.php?uerror=products name required&edit=$edit_id");
	}
	else
	{
		$query="UPDATE `products` SET 
		`product_cat` = '$up_prod_cat',
		`product_brand`='$up_prod_brand',
		`product_title` ='$up_prod_name',
		`product_price` ='$up_prod_price',
		`product_desc` = '$up_prod_desc',
		`product_image` ='$product_image',
		`product_keywords`= '$up_prod_keywords'
		WHERE `products`.`product_id` =$edit_id";
		if(mysqli_query($conn,$query))
		{
			header("location:products.php?usuccess=product updated&edit=$edit_id");
		}
		else
		{
			header("location:products.php?uerror=product name required&edit=$edit_id");
		}
		
	}
}

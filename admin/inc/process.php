<?php
include"db.php";
session_start();
if(!isset($_SESSION["uid"]))
{
	header('location:../loginn.php');
}
if(isset($_POST["add-category"]))
{
	$cat_name=$_POST["cat-name"];
	if(empty($cat_name))
	{
		header("location:../categories.php?error=category name required");
	}
	else
	{
		$query="INSERT INTO `categories` (`cat_title`) VALUES ('$cat_name')";
		if(mysqli_query($conn,$query))
		{
			header("location:../categories.php?success=category added");
		}
		
	}
}
/////////////////// Update Category///////
if(isset($_POST["update-category"]))
{
	$edit_id=$_GET['update_category'];
	$up_cat_name=$_POST["up-cat-name"];

	if(empty($up_cat_name))
	{
		header("location:../categories.php?uerror=category name required&edit=$edit_id");
	}
	else
	{
		$query="UPDATE `categories` SET `cat_title` = '$up_cat_name' WHERE `categories`.`cat_id` =$edit_id";
		if(mysqli_query($conn,$query))
		{
			header("location:../categories.php?usuccess=category updated&edit=$edit_id");
		}
		else
		{
			header("location:../categories.php?uerror=category name required&edit=$edit_id");
		}
		
	}
}
?>

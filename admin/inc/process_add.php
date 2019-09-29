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
		header("location:../add_category.php?error=category name required");
	}
	else
	{
		$query="INSERT INTO `categories` (`cat_title`) VALUES ('$cat_name')";
		if(mysqli_query($conn,$query))
		{
			header("location:../add_category.php?success=category added");
		}
		
	}
}
<?php
include"db.php";
session_start();
if(!isset($_SESSION["uid"]))
{
	header('location:../loginn.php');
}

/////////////////// Update Category///////
if(isset($_POST["update-category"]))
{
	$edit_id=$_GET['update_category'];
	$up_cat_name=$_POST["up-cat-name"];

	if(empty($up_cat_name))
	{
		header("location:../category2.php?uerror=category name required&edit=$edit_id");
	}
	else
	{
		$query="UPDATE `categories` SET `cat_title` = '$up_cat_name' WHERE `categories`.`cat_id` =$edit_id";
		if(mysqli_query($conn,$query))
		{
			header("location:../category2.php?usuccess=category updated&edit=$edit_id");
		}
		else
		{
			header("location:../category2.php?uerror=category name required&edit=$edit_id");
		}
		
	}
}
?>

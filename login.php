<?php
include "db.php";
session_start();
if(isset($_POST["userLogin"]))
{
$email=mysqli_real_escape_string($conn,$_POST["userEmail"]);
$password=md5($_POST["userPassword"]);
	
	$sql="select * from user_info where email='$email' and password='$password'";
	$run_query=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($run_query);
	if($count==1)
	{
		$row=mysqli_fetch_array($run_query);
		    $_SESSION["uid"]=$row["id"];
			$_SESSION["name"]=$row["f_name"];
			echo"true";
		}
	/*else
	{
	echo "
	<div class='alert alert-danger'>
	<a href='#' class='close' data-dismiss='alert'
	   aria-label='close'>&times;</a><b>this account is not exist !</b>
	</div>
	";
	}*/
	
	
	}
?>
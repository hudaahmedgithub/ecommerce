<?php
include "db.php";
$f_name=$_POST["f_name"];
$l_name=$_POST["l_name"];
$email=$_POST["email"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];
$mobile=$_POST["mobile"];
$address1=$_POST["address1"];
$address2=$_POST["address2"];
$name="/^[a-zA-Z ]*$/";
$emailValidation="/^[_a-z0-9-]+(\.[_a-z0-9-]+)
*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number="/^[0-9]+$/";
if(empty($f_name||empty($l_name)||empty($email)||empty($password)||empty($repassword)||empty($mobile)||empty($address1)||empty($address2)))
{   echo "
	<div class='alert alert-warning'>
	<a href='#' class='close' data-dismiss='alert'
	   aria-label='close'>&times;</a><b>Please fill all fields</b>
	</div>
	";
	exit();
}
else {
if(!preg_match($name,$f_name))
{
 echo "
	<div class='alert alert-warning'>
	<a href='#' class='close' data-dismiss='alert'
	   aria-label='close'>&times;</a><b>Invalid first name $f_name</b>
	</div>
	";
	exit();
}
if(!preg_match($name,$l_name))
{
	 echo "
	<div class='alert alert-warning'>
	<a href='#' class='close' data-dismiss='alert'
	   aria-label='close'>&times;</a><b>invalid last name  $l_name</b>
	</div>
	";
	exit();
}
if (!filter_var($email,FILTER_VALIDATE_EMAIL))
{
	echo "
	<div class='alert alert-warning'>
	<a href='#' class='close' data-dismiss='alert'
	   aria-label='close'>&times;</a><b>invalid Email $email</b>
	</div>
	";
	exit();
}
if(strlen($password) < 5)
{
	echo "
	<div class='alert alert-warning'>
	<a href='#' class='close' data-dismiss='alert'
	   aria-label='close'>&times;</a><b>this password is week</b>
	</div>
	";
	exit();
}
if(strlen($password) < 5)
{
	echo "
	<div class='alert alert-warning'>
	<a href='#' class='close' data-dismiss='alert'
	   aria-label='close'>&times;</a><b>invalid password</b>
	</div>
	";
	exit();
	
}
if($password !=$repassword)
{
	echo "
	<div class='alert alert-warning'>
	<a href='#' class='close' data-dismiss='alert'
	   aria-label='close'>&times;</a><b>this password is not sam </b>
	</div>
	";
	exit();
}
if(!preg_match($number,$mobile))
{
	echo "
	<div class='alert alert-warning'>
	<a href='#' class='close' data-dismiss='alert'
	   aria-label='close'>&times;</a><b>invalid mobile number limt 10 number </b>
	</div>
	";
	exit();
}
if(!strlen($mobile)==10 )
{
echo "
	<div class='alert alert-warning'>
	<a href='#' class='close' data-dismiss='alert'
	   aria-label='close'>&times;</a><b>this mobile must be 11 digts</b>
	</div>
	";
	
	exit();
}
$sql="select id from user_info where email='$email' LIMIT 1";
	$run_query=mysqli_query($conn,$sql);
	$count_email=mysqli_num_rows($run_query);
	if($count_email > 0)
	{
		echo "
	<div class='alert alert-danger'>
	<a href='#' class='close' data-dismiss='alert'
	   aria-label='close'>&times;</a><b>this account is already exist</b>
	</div>
	";
		exit();
	}

else
	{
		$password=md5($password);
		$sql="INSERT INTO user_info  (id,f_name,l_name,email,password,mobile,address1,address2) VALUES (NULL,'$f_name','$l_name','$email','$password','$mobile','$address1','$address2')";
		$run_query=mysqli_query($conn,$sql);
		if($run_query)
		{
			echo "
	<div class='alert alert-success'>
	<a href='#' class='close' data-dismiss='alert'
	   aria-label='close'>&times;</a><b>Your Registration is done !</b>
	</div>
	";
		}
	exit();
	}
}
?>


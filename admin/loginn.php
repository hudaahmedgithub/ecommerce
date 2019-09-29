<?php
include "inc/db.php";
session_start();
if(!empty($_POST['submit']))
{
	
$email=mysqli_real_escape_string($conn,$_POST["email"]);
$password=md5($_POST["password"]);
	
	$sql="select * from user_info where email='$email' and password='$password' and role='1'";
	$run_query=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($run_query);
	if($count==1)
	{
		$row=mysqli_fetch_array($run_query);
		    $_SESSION["uid"]=$row["id"];
			$_SESSION["name"]=$row["f_name"];
		
		header("location:categories.php");
		
		}
	else 
		{
			$error="incorrect password or email";
		}
		
	$sql="select * from user_info where email='$email' and password='$password' and role='2'";
	$run_query=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($run_query);
	if($count==1)
	{
		$row=mysqli_fetch_array($run_query);
		    $_SESSION["uid"]=$row["id"];
			$_SESSION["name"]=$row["f_name"];
		echo "true";
		header("location:category2.php");
		
		}
	else 
		{
			$error="incorrect password or email";
		}
		
	}
	
	

?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Matrix Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<style>
	.image
	{
		border-radius: 50%;
		width: 100px;
		height: 100px;
		
	}
	#loginbox
	{
		margin-top: -100px;
		border:50px solid #f90;
		
	}
	.bg_ly
	{
		background: #f90;
	}
	.btn
	{
		
		margin-left:180px;
		background: #f90;
		margin-bottom: 10px;
		padding: 10px 20px 10px 20px;
		border-radius: 10%;
	}
	</style>
    </head>
    <body>
		
		<center>
			<?php
			if(isset($error))
			{
				echo "<span style='color:#fff'>".$error."</span>";
			}
			?>
		</center>
		
        <div id="loginbox">  
			
            <form id="loginform" method="post" class="form-vertical" action="">
				
				<center>
					 <div class="control-group normal_text"> <h3><img src="img/gallery/imgbox3.jpg"  /></h3></div>
		
		</center>
                <div class="control-group shadow" >
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-user"> </i></span><input type="email" placeholder="Username" name="email" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="password" />
                        </div>
                    </div>
                </div>
                
					
					
					<input type="submit" class="btn btn-warning" value="login" name="submit">
					
             
            </form>
          <!--  <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info">Reecover</a></span>
                </div>
            </form>
        
        -->
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
		</div>
    </body>

</html>

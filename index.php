<?php
session_start();
if(isset($_SESSION["uid"]))
{
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>yarab</title>
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "1b77a747-4719-41c8-bf49-822ce2d15481",
    });
  });
		</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="js/main.js"></script>
	
	
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" style="font-size:30px;color:#c4e3f3" href="#">Khan Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
		  <a class="nav-link"style="font-size:20px;color:#c4e3f7" href="#"><span class="glyphicon glyphicon-home">Home </span><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
		  <a class="nav-link" style="font-size:20px;color:#c4e3f7" href="#"><span class="glyphicon glyphicon-modal-window">Products</span></a>
      </li>
    
		<li><input type="search" class="form-control" placeholder="search here..." id="search" style="width:200px;margin-left:100px;margin-top:7px;"></li>
		<li><button class="btn btn-primary" id="search_btn" style="margin-top:7px; background:#c4e3f3;color:#dc143c">Search</button></li>
      
   
	  <ul class="navbar-nav navbar-right">
       <li class="nav-item">
		   <a class="nav-link dropdown-toggle" data-toggle="dropdown"  style="color:#c4e3f7" href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span >0</span></a>
		    <ul class="dropdown-menu">
			
			  <div class="panel panel-info">
					 <div class="panel-heading">
				  <div class="row">
					  <div class="col-md-3">S1.No</div>
					  <div class="col-md-3">Product Images</div>
					  <div class="col-md-3">product name</div>
					  <div class="col-md-3">Price $</div>
				  </div>
					</div>
					<div class="panel-body">
						<div class="panel-footer">
						</div>
				  </div></div></ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:#c4e3f7" href="customer_registration.php"><span class="glyphicon glyphicon-user">SignUp</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown"style="color:#c4e3f7" href="#"><span class="glyphicon glyphicon-user">SignIn</span></a>
		  <ul class="dropdown-menu">
			  <div style="width:300px;background:#c4e3f3">
			  <div class="panel panel-info">
					 <div class="panel-heading">Login</div>
					</div>
					<div class="panel-body">
						
						<label for="email">Email</label>
						<input type="email" id="email" class="form-control" required>
						
						<label for="password">Password</label>
						<input type="password" id="password" class="form-control" required>
						<a href="#" style="color:#dc143c">Forget Password</a>
						<input style="background:#dc143c;float:right" type="submit" class="btn btn-danger" value="login" id="login">
						
				  </div>
				  <div class="panel-footer" id="e_msg"></div>
			  </div>
			 
		  </ul>
      </li>
	  </ul>
	  </ul>
  </div>
</nav>
		<br>
		<br>
		<br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-2">
					<div id="get_category"></div>
					<!--<div class="nav nav-pills nav-stacked">
						<li style="background:#c4e3f3;"><a href="#"><h4 style="color:#903">&nbsp;&nbsp;&nbsp;&nbsp;Categories&nbsp;&nbsp;&nbsp;&nbsp;</h4></a></li>
					    <li><a href="#">Categorirs</a></li>
						<li><a href="#">Categorirs</a></li>
						<li><a href="#">Categorirs</a></li>
						<li><a href="#">Categorirs</a></li>
						<li><a href="#">Categorirs</a></li>
					
					</div>

				-->
					<div id="get_brand"></div>
					<!--<div class="nav nav-pills nav-stacked">
						<li style="background:#c4e3f3;"><a href="#"><h4 style="color:#903">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brand&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4></a></li>
					    <li><a href="#">Categorirs</a></li>
						<li><a href="#">Categorirs</a></li>
						<li><a href="#">Categorirs</a></li>
						<li><a href="#">Categorirs</a></li>
						<li><a href="#">Categorirs</a></li>
					
					</div>-->
				</div>
				
				<div class="col-md-8">
				 <div class="panel panel-info">
					 <div class="panel-heading">Products</div>
					</div>
					<div class="panel-body">
						<div id="get_product">
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
							<div class="panel-heading">Samsung Galaxy</div>
					         <div class="panel-body">
							   <img src="image/n.PNG">
							</div>
							<div class="panel-heading">$999
							<button style="float:right;background:#f90;color:" class="btn btn-danger">AddToCart</button>
								<br>	
					        </div>
					       
							</div>
						</div>-->
					</div>
					<div class="panel-footer">@copy</div>
				</div>
				<div class="col-md-1"></div>
		</div></div>
	</body>
	

	
</html>
<?php
session_start();
if(!isset($_SESSION["uid"]))
{
	header("location:index.php");
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
  <a class="navbar-brand" style="font-size:30px;color:#c4e3f3" href="index.php">Khan Store</a>
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
	  </ul></div></nav>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-7" id="cart_msg">
				<!--message of delete-->
			</div>
			<div class="col-md-3"></div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<div class="panel panel-info">
				<div class="panel-heading">Cart Checkout</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-2">
							<b>Action</b>
						</div>
						<div class="col-md-2">
							<b>Product Image</b>
						</div>
						<div class="col-md-2">
							<b>Product Name</b>
						</div>
						<div class="col-md-2">
							<b>Quantity</b>
						</div>
						<div class="col-md-2">
							<b>Product Price</b>
						</div>
						<div class="col-md-2">
							<b>Total price</b> 
						</div>
						
					</div>
					<br>
					<div id="cart_checkout"></div>
				<!--<div class="row">
					<div class="col-md-2">
						<div class="btn-group">
							<a href="#"class="btn btn-danger">
							<span class="glyphicon glyphicon-trash"></span></a>
							<a href="#"class="btn btn-info">
							<span class="glyphicon glyphicon-ok-sign"></span></a>
								</div>
							</div>
						
						<div class="col-md-2">
							<img src="image/s2.jpg" width="100px" height="100px">
						</div>
						<div class="col-md-2">
							Product Name
						</div>
						<div class="col-md-2">
						<input type="text" class="form-control" value="1">
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control" value="500">
						</div>
						<div class="col-md-2">
						<input type="text" class="form-control" value="6000"> 
						</div>
					</div>-->
					
				</div>
				<div class="panel-footer">
				</div>
			</div>
			</div>
		</div>
		</div>
		</div>
	</body>


</html>
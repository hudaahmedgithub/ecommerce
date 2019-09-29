<?php
session_start();
if(!isset($_SESSION["uid"]))
{
	header("location:index.php");
}
include "include/header.php";
?>

	
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
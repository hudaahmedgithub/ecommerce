<?php
session_start();
if(!isset($_SESSION["uid"]))
{
	header("location:index.php");
}
include "include/header.php";
?>

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
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8" id="product_msg">
							
						</div>
					</div>
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
		</div>
		
		<div class="row">
			<div class="col-md-12">
			    <center>
		            <ul class="pagination" id="pageno">
			         
					</ul>
				
				</center>
			</div>
			</div>
		
		</div>
<?php
include "include/footer.php";
?>
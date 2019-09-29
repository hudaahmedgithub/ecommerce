<?php
session_start();
if(isset($_SESSION["uid"]))
{
	header("location:profile.php");
	
}
include"include/head.php";
?>
	
<body>
	<!--slider-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="margin-top:-22px;width:100%;height:500px">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/c2.PNG" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/33.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/Capture.PNG" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		<br>
		<br>
		<br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-0"></div>
				<div class="col-md-2">
				
					<div id="get_category">
						<center>
							</center>
						</div>
					
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
						<li style="background:#c4e3f3;"><a href="#"><h4 style="color:#903">Brand</h4></a></li>
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
				
				<div class="col-md-1">
					</div>
</div></div>
</div>
	

	
<?php
	include "include/footer.php";
	?>
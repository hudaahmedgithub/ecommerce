<?php
include "include/head.php";
?>

<div class="container-fluid" style="background:#c4e3f7;margin-top:-20px">
		<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8" id="signup_msg"></div>
				<div class="col-md-2"></div>
		</div>
				
		<div class="row">
				
			<div class="col-md-2"></div>
				
			<div class="col-md-8">
					<div class="panel panel-info">
						<div class="panel-heading">
						Customer Sign Up
						</div>
						
					<div class="panel-body">
						
							<form method="post">
					<div class="row">
						<div class="col-md-6">
							<label for="f_name">
							First Name
							</label>
							<input type="text" id="f_name" class="form-control" name="f_name">
						</div>
						<div class="col-md-6">
							<label for="l_name">
							Last Name
							</label>
							<input type="text" id="l_name" class="form-control" name="l_name">
						</div>
							</div>
						<div class="row">
							<div class="col-md-12">
							<label for="email">
							Email
							</label>
							<input type="email" id="email" class="form-control" name="email">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
							<label for="password">
							Password
							</label>
							<input type="password" id="password" class="form-control" name="password">
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
							<label for="repassword">
							Confirm Password
							</label>
							<input type="password" id="repassword" class="form-control" name="repassword">
								</div>
							</div>
						<div class="row">
							<div class="col-md-12">
							<label for="mobile">
							Mobile
							</label>
							<input type="mobile" id="mobile" class="form-control" name="mobile">
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
							<label for="address1">
							Address one
							</label>
							<input type="text" id="address1" class="form-control" name="address1">
								</div>
							</div>
						<div class="row">
							<div class="col-md-12">
							<label for="address2">
							Address two
							</label>
							<input type="text" id="address2" class="form-control" name="address2">
								</div>
							</div>
							
						<div class="row">
							<div class="col-md-12">
							<input style="width:100%;background:#dc143c;float:right" type="button" id="signup_button" class="btn btn-danger btn-lg" name="signup_button" value="Sign Up">
								</div>
				
						</div>
						<div class="panel-footer">
						thanks for your accounts
							
						</div>
				
				<div class="col-md-1">
								</div></form>
			</div>
						</div></div>
	</div></div>		
		<!--footer-->


    <?php
include "include/footer.php";
?>
		
	
	</body></html>
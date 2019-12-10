
<?php include('include/home/header.php'); ?>
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
	
						<h2>User Login</h2>
						  
						  <form name="loginform" class="login" method="post" action="userLogin.php">
						  <div class="imgcontainer">
							<img src="images/home/userAvatar.png" alt="Avatar" class="avatar">
						  </div>						  
                            <input type="text" name="username1" placeholder="Enter your username" id="username1" required/>
                            <input type="password" name="password1" placeholder="password" id="password1" required/>

							<input type="submit" name="submit" value="Login">
						 <div class="containerForm" style="background-color:#f1f1f1">
							<p>Don't have an account? <a href="userRegister.php">Sign Up</a></p>
						</div>
                        </form>
						<br>
						<hr>
						<br>
						
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	<!-- Form css -->
	<style>
		form {
		border: 3px solid #f1f1f1;
		align: "center";
		
		-webkit-box-shadow: 0px 0px 15px;
		box-shadow: 0px 0px 15px;
		margin-left: auto;
		margin-right: auto;
	}
		.containerForm {
		padding: 16px;
	}
		.imgcontainer {
		text-align: center;
		margin: 24px 0 12px 0;
	}
	</style>

<?php include("db.php"); ?> 
<?php include('include/home/footer.php'); ?>
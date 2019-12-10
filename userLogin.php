<?php

if(isset($_POST['submit'])){
				
			include("validate_login_user.php");
			include("orderUser.php");
		}
else{
	include("userLoginForm.html");
}
?>
<?php
//includes
include("config/connection.php");  //include the database connection 
include("config/config.php");  //include the application configuration settings

//views
if(isset($_POST['btn_register'])){
				
			//process the registration data
			include("helper/helperFunctionsDatabase.php");
			include("helper/helperFunctionsTables.php");
			include("validateRegisterUserCredential.php");
			include("welcomeUser.php");
		}
else{
	include("form/userRegister.html");
}
?>
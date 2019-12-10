<?php
//includes
include_once("config/config.php");  //include the application configuration settings
include("config/connection.php"); //include the database connection

//Start/join a session
//session_start();  //this must come BEFORE the <HTML> tag

//initialise session variable used by controller
if(!isset($_SESSION['loggedin'])){$_SESSION['loggedin']=0;}
//if(!isset($_SESSION['loginAttempts'])){$_SESSION['loginAttempts']=0;}
if(!isset($_SESSION['views'])){$_SESSION['views']=0;}


//set up a session variable to count the page views if the user loggedin variable is set
if($_SESSION['loggedin']==1){  //already logged in
	$msg='Controller Msg: Already Logged In';
	if(isset($_SESSION['views']))
		$_SESSION['views']++;
	else
		$_SESSION['views'] = 1;
}


//process login
if(isset($_POST['submit'])){//Has the login button been pressed
	//check the login credentials are valid
	//get the form values entered
	$userID=$_POST['username1'];
	$userPW=$_POST['password1'];
	//$passEncrypt= hash('ripemd160', $userPW);  //encrypt the password 
	
	//construct the SQL query  
	$sql= "SELECT * FROM register WHERE userName='$userID' AND Password='$userPW'";  //password is not encrypted in DB
	//execute the query
	
	$msg=$sql;
	
	$rs=$conn->query($sql);  //execute the query
	
	if($rs->num_rows==1) //process the login credentials
		{  //login is successful
			$_SESSION['loggedin']=1;
			$rs->data_seek(0);  //point to the current row
			$row = $rs->fetch_assoc();  //get the data in the row

	} //end login successful section
	else{   //login is not successful	
					include("error.php");
			}
			
	}

?>
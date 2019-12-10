<?php
$table='register';  //table to insert values into
	
//INSERT QUERY
//get the values entered in the form
$user=$conn->real_escape_string($_POST['user']);
$firstname=$conn->real_escape_string($_POST['firstname']);
$lastname=$conn->real_escape_string($_POST['lastname']);
$password1=$_POST['password1'];
$re_password=$_POST['re-password'];		

$msg='';  //this is an empty message initially , it will contain the result of the insertion
	
if ($password1===$re_password)
	{
		$sqlInsert= "INSERT INTO $table (userName,FirstName,Lastname,Password) VALUES('$user','$firstname','$lastname','$password1')";
		
		if(query($conn,$sqlInsert)==1) //execute the INSERT query
		{ 
		$msg.= "<h3>New data inserted successfully</h3>";
		
		}
		else
		{
		$msg.=  "<h3>New data has not been inserted - a record for this ID already exists</h3>";
		}
                
		
	}
	else
	{ 
		$msg.= "<h3>Passwords don't match - data not entered</h3>";
	}
	
	$conn->close();
?>			
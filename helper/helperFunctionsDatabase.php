<?php
//helper functions for database interaction

function query($connection,$sql)
{
	try {
		if ($connection->query($sql)===TRUE)  //execute the insert sql
		{
		return 1;  //if successful
		}
		else
		{
		return 0;  //if not successful
		}
	}
	//catch exception
	catch(Exception $e) {
		if (__DEBUG==1) 
			{ 
			echo 'Message: ' .$e->getMessage();
			exit('<p class="warning">PHP script terminated');
			}
		else
			{	
			header("Location:".__USER_ERROR_PAGE);
			}
	}
}

?>

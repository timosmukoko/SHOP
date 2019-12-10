<?php
//helper functions

function getTableData($connection,$sql)
{
	try {
		$rs=$connection->query($sql);
		return $rs;
	}
	//catch exception
	catch(Exception $e) {
		if (__DEBUG==1) 
			{
			//DEBUG mode is enabled
			echo '<hr><h2>helperFunctionsTables.php  - getTableDataDebug Information:</h2>';
			echo '<h4>Error message $e:</h4>';
			echo 'Message: ' .$e->getMessage();
			//echo '<h4>Post Array:</h4>';
			//print_r($_POST);
			//echo '<h4>SQL:</h4>';
			//echo '$sql string:'.$sql'<br>';
			exit('<p class="warning">PHP script terminated');		
			}
		else
			{
			//DEBUG mode is disabled
			header("Location:".__USER_ERROR_PAGE);
			}
	}
}

function checkResultSet($rs)
	{
	if($rs === false) {
		if (__DEBUG==1)
		{
			//DEBUG mode is enabled
			echo '<hr><h2>helperFunctionsTables.php  - getTableDataDbug Information:</h2>';
			echo '<h4>Error message: ResultSet is Empty - check table name</h4>';
			exit('<p class="warning">PHP script terminated');		
		}
		else
		{	
			header("Location:".__USER_ERROR_PAGE);
		}
	} else {
		
                while ($row = $rs->fetch_assoc()) {
                  $arr[] = $row; //put the result into an array
                  }               
                
		return $arr;
	}
}

function generateTable($tableName, $titlesResultSet, $dataResultSet)
{
	//use resultsets to generate HTML tables

	echo "<table border=1>";

	//first - create the table caption and headings
	echo "<caption>".strtoupper($tableName)." TABLE - RESULT</caption>";
	echo '<tr>';
	foreach($titlesResultSet as $fieldName) {
		echo '<th>'.$fieldName['Field'].'</th>';
	}
	echo '</tr>';

	//then show the data
	foreach($dataResultSet as $row) {
		echo '<tr>';
		foreach($titlesResultSet as $fieldName) {
			echo '<td>'.$row[$fieldName['Field']].'</td>';}
		echo '</tr>';
		}
	echo "</table>";
}
?>

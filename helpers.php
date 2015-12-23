<?php
include 'connection.php';


//connects the database and inserts, updates the table 
function insertTable($query){
	$resultQuery = mysql_query($query);
	echo $resultQuery;
	return  $resultQuery;
}

?>

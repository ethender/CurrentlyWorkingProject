<?php
session_start();

include  'connection.php';

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$query = "SELECT * FROM admin WHERE name='$username' AND password='$password'";
		$resultQuery = mysql_query($query,$connection);
		
		
		if(mysql_num_rows($resultQuery) == 1){
			header("Location:sucess.html");
		}else{
			header("Location:fail.html");
		}
	}
?>

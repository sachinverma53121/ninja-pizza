<?php 
   // MySQLi or PDO 
   // connect to database
	$conn = mysqli_connect('localhost','root', '', 'ninja_pizza');
	// check connection
	if(!$conn) {
		echo 'Connection Failed <br/>' .mysqli_connect_error();
	}


 ?>
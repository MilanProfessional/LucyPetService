<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "db_LucyPet_Assignment";
	
	$conn = mysqli_connect($host,$user,$pass,$dbname)
		or die("Unable to connect to the database".$conn->mysql_error);
	
?>
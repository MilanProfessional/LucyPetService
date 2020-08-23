<?php
	include("../connection/connectdb.php");
	
	$tbl_user_reg = "create table if not exists tbl_signup(
		
		uid int not null primary key AUTO_INCREMENT,
		firstname varchar(50) not null,
		lastname varchar(50) not null,
		username varchar(50) not null,
		contact varchar(50) not null,
		
		distance float not null,
		address varchar(50) not null,
		password varchar(50) not null
		
	)";
	
	$tbl_user_reg = $conn -> query($tbl_user_reg);
	
?>
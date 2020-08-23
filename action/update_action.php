<?php
require '../connection/connectdb.php';
$sql="update tbl_petreg set 
name='$_POST[pname]',walk=$_POST[walk],feed=$_POST[feed],social=$_POST[social],session=$_POST[session],days='$_POST[days]',time='$_POST[time]'
where pet_id = $_POST[id]";
echo $sql;
$result=$conn->query($sql) or die($conn->error);
if($result){
	
header('location:../pages/service.php?a=true'); 
}
else{
echo"ERROR".$conn->error;

header('location:../pages/services.php'); 
}


//redirection to services.php

?>

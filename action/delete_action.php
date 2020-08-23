<?php
require '../connection/connectdb.php';
$id=$_GET['id'];
$query="delete from tbl_petreg where pet_id ='$id'";
$result=$conn->query($query);
header('location:../pages/service.php'); 


?>

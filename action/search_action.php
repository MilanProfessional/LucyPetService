<?php

require '../connection/connectdb.php';
include_once '../pages/service.php';
if(isset($_POST['searchbtn']))
{
				
$sql="Select * from tbl_petreg('','$_SESSION[userid]','$pname','$age','$walk','$feed','$social','$session','$days','$time')";
					if($conn->query($sql)){
	header("Location: ../pages/service.php?a=true");
}
else
{
	echo "Error! ".$conn->error;
}	
}
?>
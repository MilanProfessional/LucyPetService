<?php
session_start();
require '../connection/connectdb.php';
if(isset($_POST['btnsubmit']))
{
	$pname=$_POST['name'];
	$age=$_POST['age'];
		$walk=$_POST['walk'];
			$feed=$_POST['feed'];
				$social=$_POST['social'];
					$session=$_POST['session'];
					$days=$_POST['days'];
					$time=$_POST['time'];				
$sql="INSERT INTO tbl_petreg VALUES('','$_SESSION[userid]','$pname','$age','$walk','$feed','$social','$session','$days','$time')";
					if($conn->query($sql)){
	header("Location: ../pages/service.php?a=true");
}
else
{
	echo "Error! ".$conn->error;
}	
}
?>
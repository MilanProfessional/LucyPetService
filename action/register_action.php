<?php
	if (isset($_POST['create']))
	{
		require'../connection/connectdb.php';
		require'../create/creation.php';	
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$uname = $_POST['uname'];
		$con = $_POST['contact'];	
		$dis = $_POST['distance'];
		$add = $_POST['address'];
	    $pass = $_POST['password'];
		$repass = $_POST['repassword'];

		if ($pass == $repass) 
		{	
			$sql = "INSERT INTO `tbl_signup` (`userid`, `firstname`, `lastname`, `username`, `contact`, `distance`, `address`, `password`)
			VALUES (null,'$fname','$lname','$uname','$con','$dis','$add','$pass');";
			$res = $conn -> query($sql); 
		} 
		else 
		{
			$info = "incorrect password";
		} 
	} 
	else if (isset($_POST['regpet'])) 
	{
		
	}
?>
<?php
	header('location:login.php');
?>
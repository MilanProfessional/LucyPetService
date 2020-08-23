<?php
	include('../connection/connectdb.php');
	session_start();
	if(isset($_SESSION['userid']))
	{
		header('location:../pages/home.php');
	}
	
	$info = "";
		
	if (isset($_POST['login'])) {
		$user = $_POST['uname'];
		$pass = $_POST['pass'];
		
		if (isset($_POST['radio'])) {
			setcookie('username' , $user , time()+60*60*24*7);
			setcookie('password' , $pass , time()+60*60*24*7);
		}
		$_SESSION['Username'] =$user;
		$_SESSION['logindone'] = "yes";
		
		$sql = "select * from tbl_signup where username ='$user' and password = '$pass'";
		
		$res = $conn -> query($sql);
		
		if ($res->num_rows == 1) {
			$arr = $res->fetch_array(MYSQLI_ASSOC);
			$_SESSION['userid'] = $arr['userid'];
			
			header('location:../pages/home.php');
		} else {
			$info = "invalid username or password";
		}
		
	} else if (isset($_POST['create'])) {
		header('location:register.php');
	}
?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body class= "background">

<div class="divlogin">
	<form method="POST" action="">
		<fieldset>
			<legend>Lucy's pet service</legend>
			<h1 class="header">Log in</h1>
			<p>Username</p>
			<input type="text" name="uname" class="textbox" placeholder="Enter your username">
			<p>Password</p>
			<input type="Password" name="pass" class="textbox" placeholder="Enter your password"></br>
			<p style="color:red;"><?php echo $info; ?></p>
			
			<input type="submit" name="login" class="button" value="Log in"></br></br>
			<p><b>Don't have an account?</b></p>
			<input type="submit" name="create" class="button" value="Create new account"></br>
			<p><center><a href="../index.php" class="button"> Lucy Pet Service </a></center></p>
			
		</fieldset>
	</form>
</div>
	
</body>
</html>
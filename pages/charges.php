<html>
<?php 

session_start();
	/*$content = $_COOKIE['username'];
	echo $content;
	if (!(isset($_COOKIE['username'] && $_COOKIE['password']))) {*/
		if (!(isset($_SESSION['logindone']))) {

?>
	<script language="javascript">
			alert("You must login first to acccess this page");
			window.location = "../action/login.php";
		</script>

<?php
		}
	/*}*/
?>
<head>
<link href="../css/style.css" type="text/css" rel="Stylesheet"> 
<link href="../css/nesteddiv.css" type="text/css" rel="Stylesheet"> 
<title>Lucy's pet service</title>
<body>
<div class="main">
	<div class="header">
		<div class="logo">
			<img src="../img/dog2.png" alt="photo of dog">
		</div>
		
		<div class="title">
			<p class="lucy"><a href="../index.php"> Lucy's pet Service </a></p>
			<p>London, UK</p>
		</div>
		
		<div class="activity">
		<?php echo "Welcome, ".$_SESSION['Username']; ?>
		<a href="../action/logout.php">logout</a>
		</div>
	</div>
		
	<div class="nav">
		<div>
			<ul id="navmenu">
				<li><a href="../index.php" >Home</a></li>
				<li><a href="service.php">Services</a></li>
				<li><a class="clicked" href="charges.php">Charges</a></li>
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="../index.php">Lucy</a></li>
				<li><a href="adminpanel.php">See all pets</a></li>
			</ul>
		</div>
		<div>
			
		</div>
	</div>
		
	<div class="container">
		<div class="link">
			This div is for link where external link are listed.
		</div>
		
		<div class="content">
			
			<legend> Charges: </legend>
<div class="servicedesc">
<hr/>
* For Pet Walking £1 per 15 minutes. <br>
* For Pet Feeding £3 per Feeding. <br>
* For Puppy Socialisation £8 per 2hours.  <br>
* For Play Seassin £3 per 30 minutes. <br>

 <p> 
&nbsp&nbsp( For additional amount of Services additional amount can be required.)
 </p>
</div>
		</div>
	</div>
</div>
</body>
</head>
</html>
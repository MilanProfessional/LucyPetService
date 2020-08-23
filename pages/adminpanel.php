
<html>
<head>
<link href="../css/style.css" type="text/css" rel="Stylesheet"> 
<link href="../css/nesteddiv.css" type="text/css" rel="Stylesheet"> 
<title>Lucy's pet service</title></head>
<body>

<?php
session_start();

$admin= (isset($_SESSION['Username'] ) ? $_SESSION['Username'] :'');
if (( strcasecmp ($_SESSION['Username'],'admin')===0) && (isset($_SESSION['logindone']))) {
 ?>
<div class="main">
	<div class="header">
		<div class="logo">
			<img src="../img/dog1.png" alt="photo of dog">
		</div>
		
		<div class="title">
			<p class="lucy"><a href="../index.php"> Lucy's pet Service </a></p>
			<p>London, UK</p>
		</div>
		
		<div class="activity">
		<?php echo "Welcome,".$_SESSION['Username']; ?>
			<a href="../action/logout.php">logout</a>
		</div>
	</div>
		
	<div class="nav">
		<div>
			<ul id="navmenu">
				<li><a  href="home.php" >Home</a></li>
				<li><a href="service.php">Services</a></li>
				<li><a href="charges.php">Charges</a></li>
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="../index.php">Lucy</a></li>
				<li><a class="clicked" href="adminpanel.php">See all pets</a></li>
			</ul>
		</div>
		<div>
			<input class="searchbutton" type="submit" name="search" value="Search">
			<input class="searchbox" type="textbox" name="search" placeholder="search">
		</div>
	</div>
		
	<div class="container">
		<div class="link">
			This div is for link where external link are listed.
		</div>
		
		<div class="content">
			This is div is for the content where all the content of the website is rendered.
		</div>
	</div>
</div>

	<?php	} else{ ?>
	<p id="access">
		<script language="javascript">  var r= confirm("You Must login from admin to access this page");
if (r == true) {
    x =  "<?php header("Location:../action/login.php"); ?>";
	
	} else {
    x = " <?php header("Location:home.php"); ?>";
}
document.getElementById("access").innerHTML = x;	
</p>  

</script>
	<?php } ?>

</body>

</html>
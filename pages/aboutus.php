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
</head>
<body>
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
				<li><a href="home.php" >Home</a></li>
				<li><a href="service.php">Services</a></li>
				<li><a href="charges.php">Charges</a></li>
				<li><a class="clicked" href="aboutus.php">About Us</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="../Lucy.php">Lucy</a></li>
				<li><a href="adminpanel.php">See all pets</a></li>
			</ul>
		</div>
		<div>
			<input class="searchbutton" type="submit" name="search" value="Search">
			<input class="searchbox" type="textbox" name="search" placeholder="search">
		</div>
	</div>
		
	<div class="container">
		<div class="link">
			Lucy Pet Service.
		</div>
		
		<div class="content">
		<p>
			<h1><tt> Our Purpose </tt></h1>

			Lucy Pet Services brings customers and pet sitters together to provide pets with unique individual care from a team of honest, kind, reliable, good people. <br>
			<b><u>Mission:</u> </b> To connect good people with good people while caring for the animals. <br>
			<b><u>Vision:</b></u> To provide professional and compassionate care for pets and their owners. To allow pet owners to feel confident and at ease when they leave their homes and pet family members in our care. 
				This allows the client to be present in their day, whether it is at the office or on vacation.
				We help pets feel like they are on vacation and allow the humans to be as well. </br>

<b><u>Goals:</b></u> To keep a life/work balance. Enjoy the animals and stay true to our dreams and ambitions.We love what we do and love the life it provides us.</br>

<b><u>Customers:</b></u> We work with good, kind, honest, and all-around awesome people.</br>
If this sounds like you, please consider being a Lucy's Pet Service client. We care your Pets.

</p>
		</div>
	</div>
</div>
</body>

</html>

<?php
		session_start();
	session_destroy();
?>	

<html>
<head>
<link href="css/style.css" type="text/css" rel="Stylesheet"> 
<link href="css/nesteddiv.css" type="text/css" rel="Stylesheet"> 
<title>Lucy's pet service</title>
<body>

<div class="main">
	<div class="header">
		<div class="logo">
			<img src="img/dog1.png" alt="photo of dog">
		</div>
		
		<div class="title">
			<p class="lucy"><a href="../index.php"> Lucy's pet Service </a></p>
			<p>London, UK</p>
		</div>
		
		<div class="activity">
		<?php echo "Welcome   "; ?>&nbsp;&nbsp;&nbsp;&nbsp;
			 
		</div>
	</div>
		
	<div class="nav">
		<div>
			<ul id="navmenu">
				<li><a href="action/register.php"> Sign Up</a></li>
				<li><a href="action/login.php"> Login</a></li>
				<li><a href="index.php" class= "clicked"> Lucy</a></li>
				
			</ul>
		</div>
		<div>
			
		</div>
	</div>
		
	<div class="container">
		
		
		<div class="content">
<legend> 
<p><h2><tt>Lucy Pet Service</tt></h2></p>
</legend>
<b>Dog Walking: </b>
We give your dog, or dogs, a great walk to give them the care and exercise they need. 
Taking dogs for walks at particular times in the day and for particular lengths of time.<br/><br/><hr/>
<b>Dog Running: </b> Give your canine friend the exercise he needs with our dog running services.<br/><br/><hr/>
<b>Pet Sitting: </b> While you’re away, let us care for your dogs sitting and visits.<br/><br/><hr/>
<b>Feeding dogs: </b> at particular intervals. It would also take into account the dog’s dietary requirements and preferences. <br/><br/><hr/>
<b>Puppy socialisation: </b> Young dogs will be taken from the home and placed in an environment with other young dogs for a period of time.</br></br><hr/>
<b>Play sessions: </b> Pet specialists come to the home at a particular time and day and play with a lonely dog for a set period of time. </br> </br><hr/>




		</div>
	</div>
</div>
</body>
</head>
</html>
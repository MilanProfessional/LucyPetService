<html>
<?php
	session_start();
	/*$content = $_COOKIE['username'];
	echo $content;
	if (!(isset($_COOKIE['username'] && $_COOKIE['password']))) {*/

require '../connection/connectdb.php';
$query="select * from tbl_petreg where userid=$_SESSION[userid]";
if(isset($_POST['searchbtn'])) 
{
	$query = "select * from tbl_petreg where name like '%".$_POST['name']."%' and userid=$_SESSION[userid]";
}
//echo $query; 
$result=$conn->query($query) or die ($conn->error);





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
<head>
<link href="../css/style.css" type="text/css" rel="Stylesheet"> 
<link href="../css/nesteddiv.css" type="text/css" rel="Stylesheet"> 
<title>Lucy's pet service</title>
<body>
<div class="main">
	<div class="header">
		<div class="logo">
			<img src="../img/dog4.png" alt="photo of dog">
		</div>
		<div class="title">
			<p class="lucy"> <a href="../index.php"> Lucy's pet Service </a> </p>
			<p>London, UK</p>
		</div>
		<div class="activity">
		<?php
		?>
		<?php echo "Welcome,".$_SESSION['Username']; ?>
			<a href="../action/logout.php">logout</a>
		</div>
	</div>
		
	<div class="nav">
		<div>
			<ul id="navmenu">
				<li><a  href="home.php" >Home</a></li>
				<li><a class='clicked' href="service.php">Services</a></li>
				<li><a  href="charges.php">Charges</a></li>
				<li><a  href="aboutus.php">About Us</a></li>
				<li><a  href="contact.php">Contact</a></li>
				<li><a  href="../index.php">Lucy</a></li>
				<li><a href="adminpanel.php">See all pets</a></li>
			</ul> 
		</div> 
		<div>
			
		</div>
	</div>
		
	<div class="container" >
		<div class="link">
	
<h1><tt>Our Services </tt></h1>
<hr/>
<br>
<p> 
Taking dogs for walks at particular times in the day and for particular lengths of time.<br><br>
 Feeding dogs at particular intervals. It would also take into account the dog’s dietary requirements and preferences.<br><br>
Puppy socialisation, in which young dogs will be taken from the home and placed in an environment with other young dogs for a period of time.<br><br>
Play sessions, where pet specialists come to the home at a particular time and day and play with a lonely dog for a set period of time.<br><br>

</p>
		</div>
		
		<div class = "content">
	
		
		
		<h1 align="left"> Add Pet Information</h1>
<?php if(isset($_GET['id'])){		
	require_once("../connection/connectdb.php");	
	$query = "Select * from tbl_petreg where pet_id = $_GET[id] and userid=$_SESSION[userid]";
	$result=$conn->query($query);
	$array = $result->fetch_array(MYSQLI_ASSOC);
	?>
		
<form method="post" action="../action/update_action.php">
<input type = "text" name = "id" value="<?php echo $array['pet_id'] ?>" hidden/>
<label>Name of Pet:</label> <br>
<input type="text" name="pname" value="<?php echo $array['name'] ?>" class="text"/><br>


<label>Walking:</label><br> 
<input type="number" name="feed" value="<?php echo $array['feed'] ?>" min="15"class="text" /> Minutes <br>


<label>Feeding :</label><br>

<input type="number" name="walk" min="1" value="<?php echo $array['walk'] ?>" class="text"/> Times<br> 



<label> Puppy Socialisation :</label><br>

<input type="number" name="social" value="<?php echo $array['social'] ?>" min="2" class="text"/> Hours <br>

<label> Play Session: </label><br>
<input type="number" name="session" min="30"class="text" value="<?php echo $array['session'] ?>" /> Minutes<br>

<b> Days:</b>
<select name="days" class="select"  required="required">
<option>--Select Days--</option>
<option>Sunday</option>
      <option>Monday</option>
      <option>Tuesday</option>
      <option>Wednesday</option>
      <option>Thursday</option>
      <option>Friday</option>
      <option>Saturday</option>
      </select>
	  <br> <br>	  
<label>Time:</label><br>
<input type="time" name="time" value="<?php echo $array['time'] ?>" min="2" class="text"/> Minutes <br>
<input type="submit" name="btnupdate" class="btn" value="update"/>
</form>
	<?php 
	}		
	else{
?>
<form method="post" action="../action/services_action.php">
<label>Name of Pet:</label> <br>
	<input type="text" name="name" value="" class="text" /><br>
<label>Age:</label> <br>
	<input type="number" name="age" value="" class="text"/><br>
<label>Walking:</label><br> 
	<input type="number" name="feed"min="15"class="text" /> Minutes <br>
<label>Feeding :</label><br>
	<input type="number" name="walk" min="1" class="text"/> Times<br> 
<label> Puppy Socialisation :</label><br>
	<input type="number" name="social" min="2" class="text"/> Hours <br/>
<label> Play Session: </label><br/>
	<input type="number" name="session" min="30"class="text"/> Minutes<br/></br>
<b> Days:</b>
<select name="days" class="select"  required="required">
<option>--Select Days--</option>
<option>Sunday</option>
      <option>Monday</option>
      <option>Tuesday</option>
      <option>Wednesday</option>
      <option>Thursday</option>
      <option>Friday</option>
      <option>Saturday</option>
      </select>
	  <br> <br>
	  <b> Time<b>
	  <input type="time" name="time" class="time" placeholder="Enter Time">
	  <br><br>
<input type="submit" name="btnsubmit" class="btn" value="Submit"/>
<input type="submit" name="btnupdate" class="btn" value="update"/>
</form>
</div>
</div>
<div class = "pets" style='float:right; position:absolute; left:55%;top:21%;'>
<?php
if(isset($_GET['a'])){
	echo "<script>alert('Successfully Done');</script>";
}
	}
?>
<h1 align="left"> Pet Information List</h1>

<table align="center" border="3px" cellspacing="2" cellpadding="3" width="100px" >
<thead>
<tr>
<th>No</th>
<th>Name of pet</th>
<th>Age</th>
<th>Feeding</th>
<th>Walking</th>
<th>Puppy Socialisation</th>
<th>Play Session</th>
<th>Days</th>
<th>Time</th>
<th>Action</th>

</tr>
</thead>

<?php

//echo $result->num-rows;
echo '<tbody align="center" border="2" cellspacing="0" cellpadding="0"  >';
$i=1;
while($row=$result->fetch_array())//array that holds all info.
{
	
echo "<tr>	
      <td>".$i."</td>
	  <td>".$row['name']."</td>
	   <td>".$row['age']."</td>
	  <td>".$row['walk']."</td>
	  <td>".$row['feed']."</td>
	  <td>".$row['social']."</td>
	  <td>".$row['session']."</td>
	  <td>".$row['days']."</td>
	  <td>".$row['time']."</td> ";
	
 $i++;
	  ?> 
	<td><a href="../action/delete_action.php?id=<?php echo $row['pet_id'];?>">delete</a>
    <a href="service.php?id=<?php echo $row['pet_id'];?>">select</a>
	<a href="../action/cost.php?id=<?php echo $row['pet_id'];?>">Cost</a>
<?php	  
echo  "</tr>";	
}
echo '</table>';
?>		
	</div>	
</div>
</br> </br> </br>
<form method="POST" action=""> 

<label> seatch anything </label> <input type="text" name="name" placeholder="Search"/>
<input type="submit" name="searchbtn" value="Search">


</form>
</body>
</head>
</html>
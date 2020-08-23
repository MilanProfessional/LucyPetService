<html>
<?php 
session_start();
		if (!(isset($_SESSION['logindone']))) {
?>
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
				<li><a href="../pages/service.php">Services</a></li>
				<li><a class="clicked" href="../pages/charges.php">Cost</a></li>
				<li><a href="../pages/aboutus.php">About Us</a></li>
				<li><a href="../pages/contact.php">Contact</a></li>
				<li><a href="../index.php">Lucy</a></li>
				<li><a href="../pages/adminpanel.php">See all pets</a></li>
			</ul>
		</div>
		<div>
		</div>
	</div>	
	<div class="container">
		<div class="content">
			<?php
if(!isset($_SESSION['Username']))
{
	header("location:../index.php");
}
require '../connection/connectdb.php';
$id=$_GET['id'];
$query="select * from tbl_petreg where pet_id='$id'";
$result=mysqli_query($conn,$query);
$data=mysqli_fetch_array($result);
$id=$data['pet_id'];
$walking=$data['walk'];
$feeding=$data['feed'];
$socialization=$data['social'];
$play=$data['session'];
$query2="select * from tbl_signup where userid=$_SESSION[userid]";
$ret=mysqli_query($conn,$query2);
$data2=mysqli_fetch_array($ret);
$distance=$data2['distance'];
$extra_distance  = 0;

if($distance>10){
	$extra_distance = $distance -10;
}

$w_cost=($walking/15)*1;
$f_cost=($feeding)*3;
$s_cost=($socialization)*8;
$p_cost=($play/30)*3;
$d_cost=($extra_distance)*0.5;
$t_cost=($w_cost)+($f_cost)+($s_cost)+($p_cost)+ ($d_cost);
?>
 <div id="wholepage">
   <div id="mainpanel">
<div id='Cost Calculation'>
<h2><b><u>COST CALCULATION</u></b></h2>


<div>
<div id='walking_cost'>
<b>Walking Cost</b>
<table border=1>
<th>Walking</th><th>Rate In Pounds</th><th>Cost In Pounds</th>
<?php
echo "<tr>
      <td>".$walking."</td><td>1/15 mins</td><td>".$w_cost."</td>
      </tr>";
?>
</table><br>
</div>

<div id='feeding_cost'>
<b>Feeding Cost</b>
<table border=1>
<th>Feeding</th><th>Rate In Pounds</th><th>Cost In Pounds</th>
<?php
echo "<tr>
      <td>".$feeding."</td><td>3/feeding</td><td>".$f_cost."</td>
      </tr>";
?>
</table><br>
</div>
</div>


<div>
<div id='socialization_cost'>
<b>Puppy Socialization Cost</b>
<table border=1>
<th>Socialization</th><th>Rate In Pounds</th><th>Cost In Pounds</th>
<?php
echo "<tr>
      <td>".$socialization."</td><td>8/session</td><td>".$s_cost."</td>
      </tr>";
?>
</table><br>
</div>
<div id='play_cost'>
<b>Play Session Cost</b>
<table border=1>
<th>Play Session</th><th>Rate In Pounds</th><th>Cost In Pounds</th>
<?php
echo "<tr>
      <td>".$play."</td><td>3/30 mins</td><td>".$p_cost."</td>
      </tr>";
?>
</table><br>
</div>

<div id='distance_cost'>
<b>Distance Cost</b>
<table border=1>
<th>Extra distance after 10 miles</th><th>Rate In Pounds</th><th>Cost In Pounds</th>
<?php
echo "<tr>
      <td>".$extra_distance."</td><td>0.5/mile</td><td>".$d_cost."</td>
      </tr>";
?>
</table><br>
</div>
</div>
<div>
<table border=2> <th>Total Cost In Pounds:</th> <th><?php echo $t_cost; ?> </th> 	</table>
<p><h3> <tt>  <a href="../pages/service.php" >  Back to Services </a> </tt> </h3></p>
</div>
</div>
 </div>
 </div>	
</div>	</div>	</div> 	</div>
</body>
</head>
</html>
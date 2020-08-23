
<?php
include_once(../connection/connectdb.php);


//Gets username value from the URL
$uname = $_GET['uname'];

//Checks if the username is available or not
$query = "SELECT username FROM tbl_signup WHERE username = '$uname'";

$result = mysqli_query($conn, $query);

//Prints the result
if (mysqli_num_rows($result)<1) {
 echo "<span class='green'>Available</span>";
}
else{
 echo "<span class='red'>Not available</span>";
}
?>

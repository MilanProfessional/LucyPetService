

<?php
require'../connection/connectdb.php';

$username=$conn->real_escape_string($_POST["uname"]);
$query="SELECT * FROM tbl_signup WHERE  username='".$username."'";
$result=$conn->query($query);
$numRows = $result->num_rows; 
if ($numRows>0){
	 echo "Username already exists"; 
    } else { 
 	echo "Username available";
}	
?>

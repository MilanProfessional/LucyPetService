<?php
/**
 *This php code creates database required
 *for operating Lucy's Pet Services Website
 */
$url = 'localhost';
$user = 'root';
$pass = '';
//CONNECTS TO DATABASE WITH ABOVE DETAILS
$connectDB = new mysqli($url, $user, $pass);

//CREATES DATABASE IF IT DOES NOT EXIST IN DATABASE SERVER
if ($connectDB->query('CREATE DATABASE IF NOT EXISTS db_lucypet_assignment')) {
    //DATABASE SELECTION
    $connectDB->select_db('db_lucypet_assignment');
    //QUERY FOR TABLE CREATION IN DATABASE ARE ASSIGNED TO VARIABLE EXECUTED
    $customerTableQuery = "CREATE TABLE `tbl_signup` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `distance` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
    if ($connectDB->query($customerTableQuery))
        echo 'customertablecreated<br>';
	
	$customerIndexQuery = "ALTER TABLE `tbl_signup`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);";
    if ($connectDB->query($customerIndexQuery))
        echo 'customerindexcreated<br>';

    $petsTableQuery = "CREATE TABLE `tbl_petreg` (
  `pet_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `walk` int(11) NOT NULL,
  `feed` int(11) NOT NULL,
  `social` int(11) NOT NULL,
  `session` int(11) NOT NULL,
  `days` varchar(50) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

    if ($connectDB->query($petsTableQuery))
        echo 'Services for pet created.<br>';

    $petsIndexQuery = "ALTER TABLE `tbl_petreg`
  ADD PRIMARY KEY (`pet_id`),
  ADD KEY `userid` (`userid`);";
    if ($connectDB->query($petsIndexQuery))
        echo "petIndexcreated<br>";
    //QUERY FOR SETTING SELECTED COLUMNS TO AUTO INCREMENT
    
    $tableAIQuery = "ALTER TABLE `tbl_signup`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;";
    $connectDB->query($tableAIQuery);

    $tableAIQuery = "ALTER TABLE `tbl_petreg`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;";
    $connectDB->query($tableAIQuery);

    //QUERY FOR SETTING CONSTRAINTS FOR DATABASE TABLES

    $constraintsQuery = "ALTER TABLE `tbl_petreg`
  ADD CONSTRAINT `tbl_petreg_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `tbl_signup` (`userid`);";
    $connectDB->query($constraintsQuery);
    
    $dataQuery = "INSERT INTO `tbl_petreg` (`pet_id`, `userid`, `name`, `age`, `walk`, `feed`, `social`, `session`, `days`, `time`) VALUES
(2, 2, 'abc', 12, 35, 35, 35, 35, 'Sunday', '00:00:12'),
(3, 1, 'abcd', 31, 31, 31, 31, 31, 'Monday', '00:12:12'),
(4, 1, 'asd', 12, 32, 32, 32, 32, 'Sunday', '00:12:12');";
    $connectDB->query($dataQuery);


} else {
    //DISPLAYS ERROR IF ANY FOUND
    echo $connectDB->error;
}
?>


<?php
	ini_set('output_buffering = on');
$con=mysqli_connect("localhost","root","");
// Check connection
if (mysqli_connect_errno())
  {
  
  }

// Create database
$sql="CREATE DATABASE users";
if (mysqli_query($con,$sql))
  {

  $query="CREATE TABLE `users`.`data` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `login` TEXT NOT NULL , `password` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
  mysqli_query($con,$query);
  header('login.php');
  }
else
  
?> 

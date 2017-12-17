<?php 
$connect=mysqli_connect('localhost','root','','users');
$err_code=mysqli_connect_errno($connect);

if($err_code=='1049'){
	include_once 'first_launch.php';

}
else{

}
 ?>

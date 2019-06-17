<?php 

session_start();
$conn= mysqli_connect('localhost','root','','assignment');

if (isset($_POST['log'])) {
	$name= $_POST['name'];
	$password= $_POST['pwd'];

	$login= "SELECT * FROM `entry` WHERE `name` ='$name' AND `password` = '$password'";
	$result= mysqli_query($conn,$login);
	$number= mysqli_num_rows($result);
	if ($number==1) {
		header('location:home.php');
	} else {
		header('location:login.php');
	}
	


} else {
	echo "Error connecting to the db";
}




 ?>
<?php 

if (isset($_POST['save'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['pwd'];
	//connect to db
	$conn=mysqli_connect("localhost","root","","assignment");
	//
	if (!$conn) {
		echo "Connection failed";
	} else {
		$check=" SELECT * FROM `entry` WHERE `name`='$name'";
		$result= mysqli_query($conn,$check);
		$num= mysqli_num_rows($result);
		if ($num==1) {
			echo "Username already exists";
		} else {
		
		
		//save data to DB
		$insertQuery="INSERT INTO `entry`(`id`, `name`, `email`, `password`) VALUES (null,'$name','$email','$password')";
		if (!$insertQuery) {
			echo "Error on the insert query";
		} else {
			$savedata=mysqli_query($conn,$insertQuery);
			if (!$savedata) {
			echo "Saving failed";
			} else {
			echo "Saving successful ------>";
			header('location:login.php');
			
		}
}
}
}
		}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<body>
	<img src="resources/portfolio-bg.jpg" class="d-block w-100" alt="...">
<div class="form-warp">
	<form action="validate.php" method="post">
		<h1 class="h">Login</h1>
		<input type="text/email" name="name" placeholder="Enter Name/Email">
		<input type="password" name="pwd" placeholder="Enter Password">
		<input type="submit" name="log" value="Login">
		<a href="registration.php">Dont have an account?</a>
	</form>
</div>
</body>
</html>
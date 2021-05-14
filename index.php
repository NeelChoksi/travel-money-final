<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>

</head>
<body>
	<div>
		<h1>Login</h1>
		<form action="index.php" method="POST">
 			<label for="inputUsername">Username</label>
 			<input type="email" id="inputUsername" name="username" placeholder="username...">

 			<label for="inputPassword">Password</label>
 			<input type="password" id="inputPassword" name="password" placeholder="password...">

 			<input type="submit" name="submit" value="submit">
		</form> 	
	</div>
</body>
</html>

<?php 
	
	$conn = mysqli_connect("localhost","root","","travelmoneyfinal");
	
	if(isset($_POST['submit'])){
		$username = htmlentities(mysqli_real_escape_string($conn,$_POST['username']));	
		$password = htmlentities(mysqli_real_escape_string($conn,$_POST['password']));

		$LOGIN_DETAILS = "SELECT * FROM userbase WHERE username='$username' AND password='$password'";
		$query = mysqli_query($conn,$LOGIN_DETAILS);

		if(mysqli_num_rows($query)>0){
			$_SESSION['username'] = $username;

			$user_from_userbase=mysqli_fetch_assoc($query);

			$_SESSION['current_user'] = $user_from_userbase['type'];
			// session_start();
			header('location: dashboard.php');
		}else{
			header('location: index.php?error=userdoesnotexist');
		}
	}
?>
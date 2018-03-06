		

		<?php if (isset($_POST['submit'])) {
			


			$username = $_POST['username'];
			$password = $_POST['password'];

if($username=='dileep'&& $password=='pass'){

echo "login Success!";

}

else {

	echo "login invalid";
}

		}
 



		 ?>

		<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>
  <form action="sign-up.php" method="post">
  username= <input type="text" name="username" id=""><br>
  password=<input type="text" name="password" id=""><br>
  <input type="submit" value="Sign in" name="submit">


  </form>
</body>
</html> 

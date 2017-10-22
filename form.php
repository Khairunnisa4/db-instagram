<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Instagram</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="container">
	<div class="header">
		Instagram
	</div>

	<div class="subheader">
		Sign up to see photos and videos<br>
		for your friends.
	</div>

	<div class="button">
		<form action="loginfb.php" method="POST">
		<input type="submit" value="Login with Facebook">
		</form>
	</div>

	<div class="subheader a">
		Or
	</div>

	<div class="content">
		<form action="hasil.php" method="POST">
			<input type="email" name="email" id="email" placeholder="Email"><br>
			<input type="text" name="fullname" id="fullname" placeholder="Fullname"><br>
			<input type="text" name="user" id="user" placeholder="Username"><br>
			<input type="password" name="password" id="password" placeholder="Password"><br>
			<input type="submit" value="Sign Up">
		</form>
	</div>

		<div class="footer">
			By signing up, You agree to our<br>
			<b>Terms</b> & <b>Privacy Policy</b>
		</div> 
</div>
</body>
</html>
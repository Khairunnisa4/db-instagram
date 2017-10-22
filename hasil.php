<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up Success</title>
</head>
<body>
<form method="POST" action="hasil.php"></form>
<table align="center">
	<tr><td>Email</td><td>:</td><td><?php echo $_POST['email']; ?></td></tr>
	<tr><td>Fullname</td><td>:</td><td><?php echo $_POST['fullname']; ?></td></tr>
	<tr><td>Username</td><td>:</td><td><?php echo $_POST['user']; ?></td></tr>
	<tr><td>Password</td><td>:</td><td><?php echo $_POST['password']; ?></td></tr>
</table>
</body>
</html>
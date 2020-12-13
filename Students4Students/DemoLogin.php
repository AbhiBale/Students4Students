<html>
<head>

		<title> User Login </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style2.css">
		
</head>
<body>
<div class="container">
	<div class="login-box">
	<div class="row">
	<div class="col-md-6 login">
		<h2> Login Here </h2>
		<form action="validation.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="form-control" required>
			</div>
			<div class="form-group">
			<label>Password </label>
			<input type="password" name="password" class="form-control" required>
			</div>
			<div class="center">
			<button type="submit" class="btn btn-primary"> Login </button>
			</div>
			<div>
			<a href="SignUp.php">Don't have an account?<u>Register here</u></a>
			<div>
			<a href="#">Forgot Password</a>
			</div>
			</div>
		</form>
	</div>
	</div>
	</div>
	</div>
</body>
</html>
	 
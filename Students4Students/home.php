<?php

session_start();

//Note Abhi : This if code is for if user press back button this will note allow to enter homepage without login details
if(!isset($_SESSION['username']))
{
	header('location:Login.php');
}
?>
<html>
<head>
	<title> Home Page </title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	  
</head>

<body>
	<div class="container"> 
	<a href="logout.php"> LOGOUT </a>
	<h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
	</div>
</body>
</html>

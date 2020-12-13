<?php

session_start();


$con = mysqli_connect('localhost','root','Abhishek@2000');
//For phpmyadmin login site

mysqli_select_db($con, 'userregistration'); //This is to select databse

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name' && password = '$pass'";//SQL query

$result = mysqli_query($con, $s);
 
$num = mysqli_num_rows($result);

if($num==1)
{
	$_SESSION['username'] = $name;
	header('location:index.php');//It will redirect to login page after successfull  login dont forget to change this to homepage after saving all files.
}
else 
{
	header('location:inlogin.php');//If password or username is incorrect this will redirect us to login page only
}


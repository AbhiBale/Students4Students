<?php

session_start();

$con = mysqli_connect('localhost','root','Abhishek@2000');
//For phpmyadmin login site

mysqli_select_db($con, 'userregistration'); //This is to select databse

$name = $_POST['user'];
$first = $_POST['fnam'];
$last = $_POST['lnam'];
$pass = $_POST['password'];
$mail = $_POST['email'];
$college = $_POST['institute'];

$s = "select * from usertable where name = '$name' OR email = '$mail'";//SQL query

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num>=1)
{
	echo"Username or Email Already Taken";
	header('location:insignup.php');
}
else 
{
	$reg= "insert into usertable(name , fname , lname, password, email, institute) values ('$name' , '$first' , '$last' , '$pass' , '$mail' , '$college')";
	mysqli_query($con, $reg);
	header('location:Login.php');//It will redirect to login page after successfull registration
	echo"Registration Successfull";
}


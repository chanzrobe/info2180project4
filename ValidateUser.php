<?php


mysql_connect("localhost", "root", "")or die("Cannot connect server"); 
mysql_select_db("project4")or die("Cannot select the desired database");

$username = $_POST["username"];
$password = $_POST["inputPassword"];


$sql= "SELECT uname, pword FROM admin WHERE uname = '$username' AND pword = '$password'"; //checks to see if the user is an administrator
if($result=mysql_query($sql))
{
	echo "<a href='AdminPage.html' /a>";
}
else 
{
	$sql2= "SELECT uname, pword FROM user WHERE uname = '$username' AND pword = '$password'"; //checks to see if the user is in the database
	if($result2=mysql_query($sql2))
	{
		echo "<a href='UserPage.html' /a>";
	}
	else
	{
		echo "Invalid Username or Password";
	}
}
mysql_close();
?>

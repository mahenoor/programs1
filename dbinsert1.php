<?php

if(!mysql_connect('localhost','root','compass'))
{
	die('Connection failed!'.mysql_error());
}

if(!mysql_select_db("tuesday"))
{
	die('Database unavailable'.mysql_error());
}

$sno = $_POST['sno'];
$name = $_POST['name'];
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO student  VALUES('sapna','3ae12cs034');

if(mysql_query($sql))
{
	echo "Registered Successfully";
}
else
{
	echo mysql_error();
}

?>

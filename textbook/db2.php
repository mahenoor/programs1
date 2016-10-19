<?php

if(!mysql_connect('localhost','root','compass'))
{
	die('Connection failed!'.mysql_error());
}

$sql = "create database newdb";

if(mysql_query($sql))
{
	echo "Database created";
}
else
{
	echo mysql_error();
}

?>
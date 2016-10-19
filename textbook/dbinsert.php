<?php

if(!mysql_connect('localhost','root','compass'))
{
	die('Connection failed!'.mysql_error());
}

if(!mysql_select_db("tuesday"))
{
	die('Database unavailable'.mysql_error());
}

$sql = "INSERT INTO student VALUES('rohan','3ae12cs089')";
 	
if(mysql_query($sql))
{
	echo "Record Inserted";
}
else
{
	echo mysql_error();
}
?>
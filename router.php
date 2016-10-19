<?php
class Connection
{
	public static function make($config)
	{
	try{
	return new PDO('mysql:host=localhost;dbname=tuesday','root','compass');
	return new PDO(
		$config['connection']);
	}
	catch(PDOException $e){
	die($e->getMessage());
	}
	}
}
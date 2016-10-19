<?php
try{
	$pdo=new PDO('mysql:host=127.0.0.1;dbname=tuesday','root','compass');
	}catch(PDOException $e){
		die('could not connect');										
	}
	$statement=$pdo->prepare('select * from student2');
	$statement->execute();
	var_dump($statement->fetchAll(PDO::FETCH_OBJ));
	?>														
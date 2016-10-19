<?php

$user_name = "root";
$password = "compass";
$database = "tuesday";
$server = "localhost";

mysql_connect("$server","$user_name","$password");

mysql_select_db("$database");


$order = "INSERT INTO student

        

        VALUES

        ('saima',

      '3ae12cs070')";


$result = mysql_query($order);

if($result){

    echo("<br>Input data is succeed");

} else{

    echo("<br>Input data is fail");

}
?>
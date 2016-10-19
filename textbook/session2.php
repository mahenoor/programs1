<?php
global $value;
session_start();
//global $value;
/*session is started if you don't write this line can't use $_Session  global variable*/
$_SESSION["newsession"]=$value;
/*session created*/
echo $_SESSION["newsession"];
/*session was getting*/
?>
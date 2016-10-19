<html>
<head>
<title>Quiz form</title>
</head>
<body>
"a quiz form"
<br />
<?php
error_reporting(1);
$questions=array(
	array('q'=>'what is ur dob?','a'=>'15june','b'=>'6july'),
	array('q'=>'what is ur job?','a'=>'intern','b'=>'developer'));
foreach ($questions[1] as $value[1]) {
?>	
<input type="radio" name="q1">
<?php
echo "$value[1]";
}
?>
<form method="post" action="">
<input type="submit" name="submit" value="submit">
<?php
if(isset($_POST['submit'])) {
	header("location:quiz83.php");
}
?>
</body></form>
</html> 



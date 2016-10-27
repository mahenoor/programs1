<html>
<head>
<title>quiz</title>
</head>
<body>
<?php
if(isset($_GET['question'])) {
	$query = $_GET['question'];
	echo "$query";
} else {
	$query = 0;
}
$questions = array(
	array(
		'q'=>'what is ur name?',
		'a'=>'rita',
		'b'=>'mansi'),
	array(
		'q'=>'what is ur job?',
		'a'=>'intern',
		'b'=>'developer'),
	array(
		'q'=>'what is ur dob?',
		'a'=>'20sep',
		'b'=>'23nov'
		)
);
?>
<form method = "post" action = "array11.php?question=<?php echo $query +1;  ?>">
<?php
$collected = $questions[$query];
$m = $collected['q'];
$n = $collected['a'];
$p = $collected['b'];
?>
<br />
<?php
echo $m;
?>
<br />
<input type="radio" name="q1">
<?php
echo $n;
?>
<br />
<input type="radio" name="q1">
<?php
echo $p;
?>
<input type="submit" name="submit" value="submit">
</body></form></html>





<html>
<head>
<title>Quiz form</title>
</head>
<body>
"a quiz form"
<?php
error_reporting(1);
$questions=array(
	array('q'=>'what is ur name?','a'=>'rita','r'=>true,'b'=>'mansi','r1'=>false),
	array('q'=>'what is ur job?','a'=>'intern','r'=>true,'b'=>'developer','r1'=>false));
?>
<form method="post" action="quiz71.php?question=<?php echo $questions[$_POST['question']]+1; ?>">
<?php
$items = $questions[$_GET['question']];
$m = $items['q'];
$n = $items['a'];
$q = $items['r'];
$p = $items['b'];
$g = $items['r1'];
echo "<br />";
echo $m;
?>
<br />
<input type="radio" name="q1">
<?php
echo $n;
echo "\n";
echo $q;
?>
<br />
<input type="radio" name="q1">
<?php
echo $p;
echo "\n";
echo $g;
?>
<br />
<input type="submit" name="submit" value="submit">
</body></form>
</html> 

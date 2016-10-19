<html>
<head>
<title>Quiz form</title>
</head>
<body>
"a quiz form"
<?php
error_reporting(1);
$questions=array(
	array('q'=>'what is ur name?','a'=>'rita','b'=>'mansi'),
	array('q'=>'what is ur job?','a'=>'intern','b'=>'developer'));
$items = $questions[$_GET['query']];
$m = $items['q'];
$n = $items['a'];
$q = $items['b'];
?>
<form method="POST" action="quiz81.php?query=1"> 
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
echo $q;
?>
<br />
<input type="submit" name="submit" value="submit">
</body></form>
</html> 

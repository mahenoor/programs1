<html>
<head>
<title>Quiz form</title>
</head>
<body>
"a quiz form"
"once you are ready to enter the quiz,click on submit button"
<br />
<?php
error_reporting(1);
$questions=array(
	array('q'=>'what is ur name?','a'=>'rita','b'=>'mansi'),
	array('q'=>'what is ur job?','a'=>'intern','b'=>'developer'),
	array('q'=>'what is ur dob?','a'=>'19july','b'=>'20sep'));
?>
<form method="post" action="
<?php
	$i=empty($_POST["query"]); 
	for($i=0;$i<2;$i++){
    	echo "localhost/quiz84.php?query=0";
	}
?>
">
<input type="submit" name="submit" value="submit">
<?php
$items = $questions[$_GET['query']];
$m = $items['q']; 
$n = $items['a'];
$q = $items['b'];
?>
<br />
<?php
echo $m;
?>
<br />
<input type="radio" name="q2">
<?php
echo $n;
?>
<br />
<input type="radio" name="q2">
<?php
echo $q;

?>
<br />
</body></form>
</html> 
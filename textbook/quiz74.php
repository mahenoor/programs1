<html>
<head>
<title>
form
</title>
</head>
<body>
<form method="post" action="quiz74.php?question=<?php if(isset($_GET['question'])) echo $input[$_GET['question']]+1;?>">
<?php
$input=array(
	   array('q'=>'1)what is ur name?','a'=>'a)Manjusha S','b'=>'b)Pratheeksha S'),
	   array('q'=>'2)what do you like?','a'=>'a)chocos','b'=>'b)icecreams'),
	   array('q'=>'3)which is your favourite color?','a'=>'a)black','b'=>'b)purple')
	   );
$collected_question = $input[$_GET['question']];
$q = $collected_question['q'];
$ans = $collected_question['a'];
$ans1 = $collected_question['b'];

echo $q;
echo "<br>";
?>
<input type="radio" name="name">
<?php
echo $ans;
echo "<br>";

?>
<input type="radio" name="name">
<?php
echo $ans1;
echo "<br>";
?>
<input type="submit" value="Submit">
</body>
</form>

</html>
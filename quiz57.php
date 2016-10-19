<?php
error_reporting(E_ALL);
$Question = array(
	1=>array(
		'Question'=>'which is birthplace of gandhiji?',
		'Answers'=>array(
			0=>array('answer_text'=>'porbandar','correct_answer'=>true),
			1=>array('answer_text'=>'bellary','correct_answer'=>false))),
	2=>array(
		'Question'=>'which is the birth place of subash chandra boseji?',
		'Answers'=>array(
			0=>array('answer_text'=>'cuttack','correct_answer'=>true),
			1=>array('answer_text'=>'hyderabad','correct_answer'=>false)))
	);
print($Question[1]['Question']);
echo "<br />";
echo "<input type=radio name=q1>";
print($Question[1]['Answers'][0]['answer_text']);
echo "<br />";
echo "<input type=radio name=q1>";
print($Question[1]['Answers'][1]['answer_text']);
echo "<br />";
?>
<html>
<form method="post" action="">
<?php
if(isset($_POST['submit'])){
foreach($Question[1] as $value[1]){
	echo "{$value[1]{'Question'}}";
	echo "<br />";
	foreach ($value[1]{'Answers'} as $k) {
		
		echo "{$k{'answer_text'}}";
		echo "<br />";
	}
}}?>
<input type="submit" name="submit" value="submit">
</form>
</html>

/*
<?php

print($Question[2]['Question']);
echo "<br />";
echo "<input type=radio name=q2>";
print($Question[2]['Answers'][0]['answer_text']);
echo "<br />";
echo "<input type=radio name=q2>";
print($Question[2]['Answers'][1]['answer_text']);
?> */
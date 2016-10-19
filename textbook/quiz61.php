<html>
<head>
<title>Quiz form</title>
</head><body>
<?php
error_reporting(1);
$Question = array(
	1 => array(
		 '(1)which is birthplace of gandhiji?'=> array(
		 	'a' =>array(
		 		'answer_text' => 'porbandar','correct_answer' => true),
			'b' => array(
				'answer_text' => 'bellary','correct_answer' => false))),
	2 =>array(
	 	 '(2)which is the birth place of subash chandra boseji?'=> array(
			'a' => array(
				'answer_text' => 'cuttack','correct_answer' => true),
			'b' => array(
				'answer_text' => 'hyderabad','correct_answer' => false))));
$collected_question = $Question[$_GET['question']];
$q = $collected_question['a'];
$ans = $collected_question['b'];
?>
?>
</html>
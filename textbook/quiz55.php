<?php
$Question = array(
	1 => array(
		'Question' => '(1)which is birthplace of gandhiji?','Answers' => array(
			0 => array(
				'answer_text' => 'porbandar',array('correct_answer' => true)),
			1 => array(
				'answer_text' => 'bellary',array('correct_answer' => false)))),
	2=>array(
		'Question' => '(2)which is the birth place of subash chandra boseji?',
		'Answers' => array(
			0 => array(
				'answer_text' => 'cuttack',array('correct_answer' => true)),
			1 => array(
				'answer_text' => 'hyderabad',array('correct_answer' => false)))));

foreach($Question[1] as $m){
	echo "$m";
	foreach($m{'Answers'} as $v){
		echo "$v";
	}
}

foreach($Question as $value){
	echo "{$value{'Question'}}";
	echo "<br />";
	foreach ($value{'Answers'} as $k) {
		echo "<input type=radio name=q1>";
		echo "{$k{'answer_text'}}";
		echo "<br />";
	}
}
echo "<input type=submit name=submit value=submit>";
?>
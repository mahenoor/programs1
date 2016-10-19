<?php
$Question =array(
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
foreach($Question as $value){
	echo "{$value{'Question'}}";
	echo "<br />";
	foreach ($value{'Answers'} as $k=>$m) {
		echo "<input type=radio name=q1>";

		foreach ($m as $n) {
			
			echo "$n";
			echo "<br />";
		}
	}
}
?>
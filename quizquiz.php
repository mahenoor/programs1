<?php
$Question=array(
		array(
			'Question1'=>'what is ur favourite color?','Answers1'=>
			array('answer_text'=>'red','correct'=>true),
			array('answer_text'=>'pink','correct'=>false),
			array('answer_text'=>'yellow',' correct'=>false)),
		array(
			'Question2'=>'what is ur favourite food?','Answers2'=>
			array('answer_text'=>'idli','correct'=>true),
			array('answer_text'=>'dosa','correct'=>false),
			array('answer_text'=>'poha','correct'=>false))
			);

$collected_question = $Question[$_GET['question']];
$q = $collected_question['Question1'];
$ans = $collected_question['Answers1'];


	
	





						
						?>
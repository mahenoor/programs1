<?php
$Question=array(
	array('Question'=>'HTTP stands for',
		'Answers'=>array(
			'(a)Hypertext Transfer Protocol',
			'(b)Hypertext transmission Protocol',
			'(c)Hypertext transport protocol')),
	array('Question'=>'HTML stands for',
		'Answers'=>array(
			'(a)Hypertext markup language',
			'(b)Hypertext makeup language',
			'(c)Hypertext taskup language')),
	array('Question'=>'OOPS stands for',
		'Answers'=>array(
			'(a)Object Oriented Programming Language',
			'(b)object onwards programming language',
			'(c)object object [programming language')),
	array('Question'=>'TTL stands for',
		'Answers'=>array(
			'(a)Time to live',	
			'(b)Time to leave',
			'(c)Time to leaf')));

foreach($Question as $value){
	echo "<h3>{$value{'Question'}}</h3>";
	foreach($value['Answers'] as $answer){
		print_r($answer);
	}
}
?>
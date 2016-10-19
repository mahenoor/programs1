<?php
error_reporting(0);


  $Question = array(
	1 => array(
		 '(1)which is birthplace of gandhiji?'=> array(
		 	0 =>array(
		 		'answer_text' => 'porbandar','correct_answer' => true),
			1 => array(
				'answer_text' => 'bellary','correct_answer' => false))),
	2 =>array(
	 	 '(2)which is the birth place of subash chandra boseji?'=> array(
			0 => array(
				'answer_text' => 'cuttack','correct_answer' => true),
			1 => array(
				'answer_text' => 'hyderabad','correct_answer' => false))));

foreach($Question[1] as $key1=>$value1) {
	echo "$key1";			
	echo "<br />";
	foreach ($value1 as $m1 => $n1) {
		echo "<input type=radio name=q1>";
		print($n1['answer_text']);
		echo "<br />";
		}
}
echo "<br />";

echo "<form method=POST action=#GET=foreach($Question[1] as $key1=>$value1) {
	echo $key1;			
	echo <br />;
	foreach ($value1 as $m1 => $n1) {
		echo <input type=radio name=q1>;
		print($n1[answer_text]);
		echo <br />;
		}
}>";
echo "<input type=submit name=submit value=submit>";
echo "<input type=submit name=validate value=validate>";
echo "<br />";
   
if(isset($_POST['submit'])) {
	foreach($Question[2] as $key2=>$value2) {
		echo "$key2";
		echo "<br />";
		foreach ($value2 as $m2 => $n2) {
			echo "<input type=radio name=q1>";
			print($n2['answer_text']);
		}
	}
}
echo "<br />";

if(isset($_POST['validate'])) {
	foreach($Question[1] as $key1=>$value1) {
		echo "$key1";
		echo "<br />";
		foreach($value1 as $m1=>$n1) {
			foreach ($n1 as $v1 => $z1) {
			//echo "<input type=radio name=q2>";
				echo "$z1";
			}
		}
	}	
}
?>
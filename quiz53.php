<?php
$Question = array(
	array('Question' => 'where was abdul kalam born?',
		'Answers' => array(
			'(a)tamilnadu' => 'coimbatore',
			'(b)karnataka'=>'bidar',
			'(c)andhra pradesh'=>'hyderabad')),
	array('Question'=> 'where was gandhiji born?',
		'Answers' => array(
			'(a)gujarat'=>'porbandar',
			'(b)andhra pradesh'=>'hyderabad',
			'(c)karnataka'=>'bellary')),
	array('Question'=> 'where was subash chandraji born?',
		'Answers'=>array(
		'(a)orissa'=>'cuttack',
		'(b)andhra pradesh'=>'hydearbad',
		'(c)karnataka'=>'bidar'))
	);
foreach($Question as $value) {
	echo "<h3>{$value{'Question'}}</h3>";
	foreach ($value['Answers'] as $answer => $value1) {
		echo "<input type = radio name = q1>";
		echo "$answer:$value1";

	}
}
echo "<br /><br />";
echo "<input type = submit name = submit value = submit>";
?>

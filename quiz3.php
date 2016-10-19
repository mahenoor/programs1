<?php
$Questions = array(1 => array('Question' => 'CSS stands for',
            'Answers' => array(
            'A' => 'Computer Styled Sections',
            'B' => 'Cascading Style Sheets',
            'C' => 'Crazy Solid Shapes'
        ),
        'CorrectAnswer' => 'A'
    ),);
foreach ($Questions as $Question => $Answers) {
echo "<li>$Question</li>";
echo "<li>$Answers</li>";
}
// $options is the key and $points is the value
//foreach ($Answers as $answer => $points) {
//echo '<input type="radio" name="questions" value="C" id="questions" />';
//echo "<li>$answer</li>";
//echo "<li>$points</li>";
//echo '<br>';
//}
?>








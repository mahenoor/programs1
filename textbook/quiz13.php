<?php 

$Questions = array(1 => array('Question' => 'CSS stands for',
            'Answers' => array(
            'A' => 'Computer Styled Sections',
            'B' => 'Cascading Style Sheets',
            'C' => 'Crazy Solid Shapes'
        ),
        'CorrectAnswer' => 'A'
    ),
    2 => array('Question' => 'HTML stands for',
        'Answers' => array(
            'A' => 'HyperText Markup Language',
            'B' => 'HyperTotal Markup Language',
            'C' => 'HyperTension Markup Language'
        ),
        'CorrectAnswer' => 'C'
    )
);
if (isset($_POST['answers'])){
    $Answers = $_POST['answers']; // Get submitted answers.

    // Now this is fun, automated question checking! ;)

    foreach ($Questions as $QuestionNo => $Value){
        // Echo the question
        echo $Value['Question'].'<br />';

        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']){
            echo '<span style="color: red;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; // Replace style with a class
        } else {
            echo '<span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; // Replace style with a class
        }
        echo '<br /><hr>';
    }
} 
require 'quiz1.html';
?>
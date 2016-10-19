<?php 
$i=1;
$Questions = array(1 => array('Question' => 'CSS stands for','Answers' => array(
            'A' => 'cascading style sheets',
            'B' => 'cascading sheets',
            'C' => 'cascading stylish sheets',
            'C' => 'cascading strong sheets'
        ),
        'CorrectAnswer' => 'A'
    ),
    2 => array('Question' => 'HTML stands for',
        'Answers' => array(
            'A' => 'HyperText markup Language',
            'B' => 'Hypertext makeup language',
            'C' => 'HyperTension markup language',
			'D' => 'Hypertexture markup language'        
			),
        'CorrectAnswer' => 'A'
    )
);
echo $Questions['1']['Question'];
require 'quiz13.html';
echo $Questions['2']['Question'];
require 'quiz14.html';
//echo $Questions['1']['A'];
//echo $Questions['A']['Question'];


?>
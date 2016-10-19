<?php
global $Questions;
//$wppa = array( 'mahe' => '10', 'engit' => '19', 'prabhat'=>'65');
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

session_start();
$_SESSION['$Questions'] = array();
//if ( ! isset($_SESSION['wppa']['album']) ) $_SESSION['wppa']['album'] = array();
//$_SESSION['wppa']['album'][1234] = 1;

//sssssss$wppa['sabiha'] = '29';

print_r($_SESSION);
?>
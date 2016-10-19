<?php
// First, go through all the questions:
$points = 0;
foreach($_POST as $quizanswer) {
    $points = $points + $quizanswer;
}

// Now points is the total of all field values.  Let's see where we want to go.
if ($points > 100) {
    header('location: showanswer.php?a=4');
} else if ($points > 60) {
    header('location: showanswer.php?a=3');
} else if ($points > 30) {
    header('location: showanswer.php?a=2');
} else {
    header('location: showanswer.php?a=1');
}

?>
<?php
// First, go through all the questions:
foreach($_POST as $quizanswer) {
    if(isset($points[$quizanswer])) {
        $points[$quizanswer]++;
    } else {
        $points[$quizanswer]=1;
    }
}

// Now go through the $points array we just made, 
// and go to the value that earned the most.
//$topscore = max($points);
//foreach($points as $type => $value) {
  //  if ($value == $topscore) {
   //     header('location: showanswer.php?a='.$type);
  //  }
//}
require 'quiz15.html';
?>
<html>
<head>
<title>Quiz form</title>
</head>
<body>
"a quiz form"
<?php
error_reporting(1);
session_start();
// initialize counts for f102 and W122 products
if (!isset($_SESSION['count']) {
   $_SESSION['count'] = 0;
}


if (isset($_POST['submit'])) {
  $do = $_POST['prodCode'];
  // increment count for product which was submitted
  $_SESSION['count_'.$do] = 1+ (int) $_SESSION['count_'.$do];
}
$questions=array(
array('q'=>'what is ur name?','a'=>'rita','b'=>'mansi'),
array('q'=>'what is ur job?','a'=>'intern','b'=>'developer'));
//$collected_question = $questions[$_GET['question']];
?>
$order = $_GET['number']; 

<form method="GET" action="quiz70.php">
<input type='hidden' name='number' value='".$order++."' />
   <input type="submit" name="submit" value="next" /> 
 </form>";
echo "$order";
 <?php
$m = $collected_question['q'];
$n = $collected_question['a'];
$q = $collected_question['b'];
echo "<br />";
echo $m;
?>
<br />
<input type="radio" name="q1">
<?php
echo $n;
?>
<br />
<input type="radio" name="q1">
<?php
echo $q;
?>
<br />
</body>
</html>
?>
<?php

// initialize counts for f102 and W122 products
if (!isset($_SESSION['count_f102']) {
   $_SESSION['count_f102'] = 0;
}
if (!isset($_SESSION['count_W122']) {
   $_SESSION['count_f102'] = 0;
}

if (isset($_POST['submit'])) {
  $do = $_POST['prodCode'];
  // increment count for product which was submitted
  $_SESSION['count_'.$do] = 1+ (int) $_SESSION['count_'.$do];
}
?>



<?php 
 $order = $_GET['number']; 

 echo "<form action='study.php' method='GET'>
   <input type='hidden' name='number' value='".$order++."' />
   <input class='big_b' type='submit'  value='next' /> 
 </form>";

 echo "$order";
 ?>
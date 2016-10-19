<html>
<head>
<title>Quiz form</title>
</head>
<body>
"a quiz form"
<?php
error_reporting(1);
$questions          = array(
    array(
        'q' => 'what is ur name?',
        'a' => 'rita',
        'b' => 'mansi'
    ),
    array(
        'q' => 'what is ur job?',
        'a' => 'intern',
        'b' => 'developer'
    )
);
$collected_question = $questions[$_GET['question']];
$m                  = $collected_question['q'];
$n                  = $collected_question['a'];
$q                  = $collected_question['b'];
?>
<br/>
<?php
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
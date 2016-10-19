<html>
<head><title>quiz</title>
<style type="text/css">
.quiz{
	text-align:center;
	color:purple;
}
.submit{
	text-align:center;
	color:red;
	background:yellow;
}
</style>
</head>
<body>
<div class="quiz">
<h2>Quiz form</h2>
<form method="post" action="">
<p>2. HTML stands for <br />
<input type="radio" name="question2" value="hypertext markup language">hypertext markup language<br />
<input type="radio" name="question2" value="hyper markup language">hyper markup language<br />
<input type="radio" name="question2" value="hypertexture markup language">hypertexture markup language<br />
<input type="radio" name="question2" value="hypertriangle markup language">hypertriangle markup language<br />

<input type="submit" name="submit" value="submit" class="submit">
<?php
$Questions=array(
	"HTTP stands for"=>array(
		"(1)hypertext markup language"=>true,
		"(2)hyper markup language"=>false,
		"(3)hypertexture markup language"=>false,
		"(4)hypertraingle markup language"=>false
		),
	);
//echo		));
foreach ($Questions as $key => $value) {
	echo "$key";
	echo "$value";
	# code...
}
foreach($value as $key=> $answer){
	echo "$key";
	echo "<br />";
	echo "$answer";
} 
?>

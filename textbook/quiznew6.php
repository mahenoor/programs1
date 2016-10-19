<form method="post" action="">
<?php

$Questions=array(
	"HTTP stands for"=>array(
		"<input type=radio name=q1 value=hypertext transfer protocol>(1)hypertext transfer protocol"=>true,
		"<input type=radio name=q1 value=hyper tarkup to language>(2)hyper tarkup to language"=>false,
		"<input type=radio name=q1 value=hypertexture transfer takeup language>(3)hypertexture trasfer takeup language"=>false,
		"<input type=radio name=q1 value=hypertriangle transfer task language>(4)hypertraingle transfer task language"=>false),
		//"correct:(1)hypertext markup language",
		//"<input type=submit name=submit value=submit>"
		"HTML stands for"=>array(
		"<input type=radio name=q2 value=hypertext markup language>(1)hypertext markup language"=>true,
		"<input type=radio name=q2 value=hypertask markup language>(2)hypertask markup language"=>false,
		"<input type=radio name=q2 value=hypertexture markup language>(3)hypertexture markup language"=>false,
		"<input type=radio name=q2 value=hypertriangle markup language>(4)hypertriangle markup language"=>false),);	 
        
        
foreach ($Questions as $key=>$value) {
	echo "$key";
	//echo "$value";
	echo "<br />";
}
foreach($value as $options=> $answer){
	echo "$options";
	echo "<br />";

	//echo "$answer";
}
echo "<br />";
echo "<br />";
echo "<input type=submit name=submit value=submit>";
echo "<br />";
echo "<br />";
if(isset($_POST['submit']))
{
	
	$keys=array_keys($Questions);
	if($i=0){
		echo $keys[$i];
			echo "<br />";
		}
		foreach($Questions[$keys[$i]] as $key=>$value){
			echo $key.":".$value."<br />";
	}}
	//echo "<input type=submit name=submit1 value=submit1>";
//if(isset($_POST['submit1']))
//{

//foreach ($Questions as $key1=>$value) {
//	echo "$key1";
	//echo "$value";
//	echo "<br />";
//}
//foreach($value as $options1=> $answer1){
//	echo "$options1";
//	echo "<br />";

	//echo "$answer";
//}}
?>

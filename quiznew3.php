<form method = "post" action = "">
<?php
$Questions = array(
	"HTTP stands for" => array(
		"<input type = radio name = q1 value = hypertext transfer protocol>(1)hypertext transfer protocol" => true,
		"<input type = radio name = q1 value = hypertext transfer tarkup protocol>(2)hypertext transfer tarkup protocol" => false,
		"<input type = radio name = q1 value = hypertexture transfer taskup protocol>(3)hypertexture transfer taskup protocol" => false,
		"<input type = radio name = q1 value = hypertriangle transfer task protocol>(4)hypertraingle transfer task protocol" => false),
		//"correct:(1)hypertext markup language",
		//"<input type=submit name=submit value=submit>"
	"HTML stands for"=>array(
		"<input type=radio name=q2 value=hypertext markup language>(1)hypertext markup language"=>true,
		"<input type=radio name=q2 value=hyper markup language>(2)hyper markup language"=>false,
		"<input type=radio name=q2 value=hypertexture markup language>(3)hypertexture markup language"=>false,
		"<input type=radio name=q2 value=hypertriangle markup language>(4)hypertriangle markup language"=>false
	)
	);
foreach ($Questions as $key=>$value) {

	echo "$key";
	//echo "$value";
	echo "<br />";
}
foreach($value as $options=> $answer){
	echo "$options";
	//echo "$answer";
	echo "<br >";
}
echo "<br />";
echo "<br />";
echo "<input type=submit name=submit value=submit>";
echo "<br />";
echo "<br />";
if(isset($_POST['submit']))
{
	$keys=array_keys($Questions);
	if($i=1){
		echo $keys[$i];
			echo "<br />";
		}
	foreach($Questions[$keys[$i]] as $key=>$value){
			echo $key.":".$value."<br />";
		}
	echo "br />";
}
echo "<input type=submit name=submit1 value=submit1>";
if(isset($_POST['submit1']))
{
	echo "next" ;
}





?>
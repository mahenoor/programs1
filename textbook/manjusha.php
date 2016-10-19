<?php
$input=array("1)what is the full form of php" 
		=>array('ans' => "Personal Homepage","Preprocessor Homepage"),
			"2)Who is the father of php?"
		=>array("Rasmus Lerdorf","Dennis M Ritchie")
	);
//print_r($input)
//print_r($input);
//exit();
$keys=array_keys($input);
for ($i=0;$i<count($input)-1;$i++) {
    echo $keys[$i];
    echo "<br>";
    foreach($input[$keys[$i]] as $key => $value) {
    	echo "<input type=radio name=ans checked>";
        echo $key.":".$value."<br>";
    }
    echo "<br>";
    echo "<form action=# method=post>";
    echo "<input type=submit name=sub value=Submit>";
    echo $_GET["ans"];
    echo "<br>";
}

if(isset($_POST['sub']))
{
	echo "<br>";
    for ($i=1;$i<=count($input)-1;$i++) {
        echo $keys[$i];
        echo "<br>";
    foreach($input[$keys[$i]] as $key => $value) {
    	echo "<input type=radio name=ans1 checked>";
        echo $key.":".$value."<br>";
    }
    echo "<br>";
    echo "<form action=# method=post>";
    echo "<input type=submit name=sub value=Submit>";
    echo "<br>";
    }



}


?>
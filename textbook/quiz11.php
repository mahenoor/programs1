<?php

$Question3=array($_POST['question1'],$_POST['question2']);
//foreach($Question as $question)
//{	

//	echo $question;
//}
if($Question3) {
    if($Question3[0]=="object oriented programming language") {
		echo "-------->you entered the option<br />".$Question3[0];
		echo "<br />";
		echo "your answer is correct";
		echo "<br /><br /><br /><br />";
	}
	else {
	         echo "------incorrect answer--------";
	         echo "<br />";
		 }
		 if($Question3[1]=="hypertext markup language") {
		     echo "--------->you entered the option<br />".$Question3[1];
			 echo "<br />";
			 echo "your answer is correct";
			 echo "<br />";
	     } 
	     else {
		          echo "--------incorrect answer--------";
		          echo "<br />";
		 	  }
}
else {
	      echo "please select an option";
	 }
?>			
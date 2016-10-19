<?php
class Average1
{
	public $num1;
	public $num2;
	public $average;
	public function num1($num1)
	{
		$this->num1=$num1;
	}
	public function num2($num2)
	{
		$this->num2=$num2;
	}
	public function evaluate($num1,$num2)
	{
		if($this->num1>100 && $this->num2>100){
	    	echo "the num1 is:".$this->num1;
	    	echo "<br />";
	    	echo "the num2 is:".$this->num2;
	    	echo "<br />";
	    	$this->average=($this->num1+$this->num2)/2;
			echo "the average of two numbers is:".$this->average;
		}
		else{
			echo "enter suitable numbers";
		}
	}
	public function display()
	{
		require 'add.html';
	}
}
$add1=new Average1();
$add1->display();
$add1->num1($_POST['num1']);
$add1->num2($_POST['num2']);
$add1->evaluate($_POST['num1'],$_POST['num2']);
//$add1->average($_POST['num1'],$_POST['num2']);
?>
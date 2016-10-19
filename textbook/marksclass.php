<?php
class Add{
	public $english;
	public $kannada;
	public $hindi;
	public $maths;
	public $science;
	public $social;
	public $total;
	public function add(){
	$total=$english+$kannada+$hindi+$maths+$science+$social;
	return $total;
	}
}
require 'marks2.php';
$add=new Add();
$add->add();
?>
<?php
class Model{
	public $description;
	public $complete;
	public function setValue($str){
	$this->str=$str;
	}
	public function getValue(){
	return "the access specifier of description is:" .$this->str;
	}}
	$carrot=new Model();
	$carrot->setValue('protected');
	echo $carrot->getValue();
	var_dump($description);
?>

<?php
class Car1{
	public $model;
	public function __construct($model)
	{
	$this->model=$model;
	}
	public function getModel()
	{
	return "the car model is" .$this->model;
	}
}
$cars=new Car1("audi");
echo $cars->getModel();
?>
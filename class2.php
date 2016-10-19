<?php
class Car{
	

public $model='audi';
public function setModel($model)
{
	$this->model=$model;
}
public function getModel()
{
	return "i am a:" .$this->model;

}
}
$car1=new Car();
echo $car1->setModel("audi");
echo $car1->getModel();
?>
<?php
class Car{
	

public $model;
public function setModel($model)
{
	$this->model=$model;

}
public function getModel()
{
	return "the <b>" .__line__. "</b> model is:" .$this->model;
}
}
$cars=new Car();
$cars->setModel('audi');
echo $cars->getModel();
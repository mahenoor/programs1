<?php
class MyClass{
	private $model='anam';
	public function _construct($model='anam'){
	if($model){
	$this->model=$model;
	}
	}
	public function getCarModel(){
	echo 'the car model is' .$this->model;
	}
	$car1=new MyClass();
	echo $car1->getModel();

}
?>
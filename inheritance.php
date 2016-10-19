<?php
class Car
{
    public $model;
    public function setValue($model)
    {
        
        $this->model = $model;
    }
    public function getModel()
    {
        return "the car model is:" . $this->model;
    }
}
class Specific extends Car
{
    public $tag;
    public function setTag($tag)
    {
        $this->tag = $tag;
    }
    public function getTag()
    {
        return "the tag is:" . $this->tag;
    }
}
class More extends Car
{
    public $color;
    public function setcolor($color)
    {
        $this->color = $color;
    }
    public function getColor()
    {
        return "the color is:" . $this->color;
    }
}
$car1 = new Car();
$car1->setValue('audi');
echo $car1->getModel();
$car2 = new Specific();
$car2->setTag('fast and furious');
echo $car2->getTag();
$car3 = new More();
$car3->setColor('green');
echo $car3->getColor();
?>

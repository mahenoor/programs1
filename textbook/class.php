<?php
class Task{
	public $task;
	public $completed;
	public function setTask($task){
		$this->task=$task;

	}
	public function getTask(){
		return "the task is ".$this->task;
	}
$tasks=new Task;
$tasks->setTask($task);
echo $this->getTask();


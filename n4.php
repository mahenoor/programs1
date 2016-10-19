<ul>
<li>
<strong>Name:</strong> <?= $task['title'];?>
</li>
<li>
<strong>due date:</strong><?= $task['due'];?>
</li>
<li>
<strong>personal responsible:</strong><?= $task['assigned_to'];?>
</li>
<li>
<strong>status:</strong>
<?php
if($task['completed']){
	echo 'finished';
}else{
echo 'incomplete';
}?>
</li>
</ul>

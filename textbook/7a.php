<ul>
<li>
name:<?= $task['title']; ?>
</li>
<li>
due:<?= $task['due']; ?></li>
<li>
assigned_to:<?= $task['assigned_to']; ?></li>
<li>
status:
<?php
if($task['complete']){
	echo 'finfished';
}
else{
	echo 'incomplete';
}
?>
</li></ul>
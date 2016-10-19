<?php
<!DOCTYPE version=1.1 encoding="utf-8"?>
<html><head></head><body>
<ul>
<?php foreach($tasks as $task) :?>
<li>
	
<?php if($task->usn) :?>
<strike><?= $task->usn;?></strike>
<?php else: ?>
<?= $task->usn; ?>
<?php endif; ?>
</li>
<?php endforeach; ?>
</ul>
</body>
</html>
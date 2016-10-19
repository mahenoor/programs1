<!DOCTYPE version=1.1 encoding="UTF-8"?>
<html>
<head>
<title>document</title></head>
<body>
<ul>

<?php 
// var_dump($task);exit;

foreach($task as $heading => $value) { ?>
	<li>
	<strong><?=ucwords($heading);?>
			
	</strong><?=$value; ?>
<?php } ?>
</ul>
</body>
</html>
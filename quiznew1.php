<form action = '' method = 'post'>
<?php
for ($i = 1; $i <= 3; $i++) {
?>
<input type="radio" name="num<?php echo $i; ?>" value="one">One<br>
    <input type="radio" name="num<?php echo $i; ?>" value="two">Two
<?php
}
?>
<input type = 'submit' value = 'Go'>
</form>


<?php
for ($i = 1; $i <= 3; $i++) {
echo $_POST['num' . $i];
}
?>
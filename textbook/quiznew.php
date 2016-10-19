
<form action = '' method = 'post'>
<?php
for ($i = 1; $i <= 1; $i++) {
?>
<h2>http stands for:</h2>
<input type="radio" name="question<?php echo $i; ?>" value="hypertext markup language">hypertext markup language<br>
<input type="radio" name="question<?php echo $i; ?>" value="hypertext makeup language">hypertext makeup language<br>
<input type="radio" name="question<?php echo $i; ?>" value="hypertext mashup language">hypertext mashup language<br>
<input type="radio" name="question<?php echo $i; ?>" value="hypertext markingup language">hypertext markingup language<br>


<?php
}
?>
<input type = 'submit' value = 'Go'>
</form>


<?php
for ($i = 1; $i <= 3; $i++) {
echo $_POST['question' . $i];
}
?>
<?php
$questionarray = array(
"What is ur favourite color?" => array
(
1 => "red",
2 => "blue",
3 => "pink",
4 => "Pitch Slapper",

));
foreach ($questionarray as $questions => $options) {

echo '<p>';
echo $questions;
echo '<br>';

// $options is the key and $points is the value
foreach ($options as $answer => $points) {
echo '<input type="radio" name="questions" value="3" id="questions" />';
echo $answer;
echo '<br>';
}

echo '</p>';
}

echo '<p align="center"><input type="submit" name="submit" value="Submit" /></p>';

?>
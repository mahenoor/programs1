<?php
$questionarray = array(
"What is Rebel Wilsons Character Name?" => array
(
20 => "Fat Amy",
0 => "Rebelicious",
0 => "Fat Samy",
0 => "Pitch Slapper",

),
"What are Nodes?" => array
(
0 => "An STD",
20 => "Vocal cords rubbing together at an above average rate w/o proper lubrication",
0 => "A point at which lines or pathways intersect",
0 => "A high note"
),
"What song did Beca audition with?" => array
(
20 => "Cups",
0 => "Call me Maybe",
0 => "Titanium",
0 => "No Diggity"
),
"What happened at last years finals?" => array
(
0 => "They Won",
0 => "Chloe had surgery on her vocal chords",
0 => "Bumper sabotaged the Barden Belles",
20 => "Aubrey threw up on stage"
)
);



// $questionarray is the key and $options is the value (an array)
foreach ($questionarray as $questions => $options) {

echo '<p>';
echo $questions;
echo '<br>';

// $options is the key and $points is the value
foreach ($options as $answer => $points) {
echo '<input type="radio" name="questions" value="20" id="questions" />';
echo $answer;
echo '<br>';
}

echo '</p>';
}
echo '<p align="center"><input type="submit" name="submit" value="Submit" /></p>';

?>
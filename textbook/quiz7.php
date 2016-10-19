 <?php 
    $questionsArray = array();

 
//Create an array of Correct answers
$correctAnswerArray = array();
foreach($questionsArray as  $question){
    $correctAnswerArray[$question['questionid']] = $question['answer'];
}
 
//Build the questions array from query result
$questions = array();
foreach($questionsArray as $question) {
    $questions[$question['questionid']] = $question['name'];
 }
 
//Build the choices array from query result
$choices = array();
foreach ($questionsArray as $row) {
    $choices[$row['questionid']] = array($row['choice1'], $row['choice2'], $row['choice3'], $row['answer']);
  }
  require 'quiz6.php';
?>
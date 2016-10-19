<?php

	
		
// Initialize variables to null.
$nameError ="";
$emailError ="";
$genderError ="";
$websiteError ="";
$name="";
$email="";
$gender="";
$website="";
// On submitting form below function will execute.
if(isset($_POST['submit'])){
if (empty($_POST["name"])) {
$nameError = "Name is required";
} else {
$name = test_input($_POST["name"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
$nameError = "Only letters and white space allowed";
}
}
if (empty($_POST["email"])) {
$emailError = "Email is required";
} else {
$email = test_input($_POST["email"]);
// check if e-mail address syntax is valid or not
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
$emailError = "Invalid email format";
}
}
if (empty($_POST["website"])) {
$website = "";
} else {
$website = test_input($_POST["website"]);
// check address syntax is valid or not(this regular expression also allows dashes in the URL)
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
$websiteError = "Invalid URL";
}
}
if (empty($_POST["comment"])) {
$comment = "";
} else {
$comment = test_input($_POST["comment"]);
}
if (empty($_POST["gender"])) {
$genderError = "Gender is required";
} else {
$gender = test_input($_POST["gender"]);
}
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
//php code ends here
?>
<html>
<head><title>registration</title>
</head><body>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["submit"]);?>">
name: <input type="text" name="name"><br>
email: <input type="text" name="email"><br>

gender:<input type="text" name="gender"><br>
website:<input type="text" name="website"><br>
<input type="submit" value="submit" name="submit">


</form></body></html>	
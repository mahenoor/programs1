
<?php // Initialize variables to null.
$name =""; // Sender Name
$email =""; // Sender's email ID
$purpose =""; // Subject of mail
$message =""; // Sender's Message
$nameError ="";
$emailError ="";
$purposeError ="";
$messageError ="";
$successMessage =""; // On submittingform below function will execute.
if(isset($_POST['submit'])) { // Checking null values in message.
if (empty($_POST["name"])){
$nameError = "Name is required";
}
else
 {
$name = test_input($_POST["name"]); // check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$name))
{
$nameError = "Only letters and white space allowed";
}
} // Checking null values inthe message.
if (empty($_POST["email"]))
{
$emailError = "Email is required";
}
else
 {
$email = test_input($_POST["email"]);
} // Checking null values inmessage.
if (empty($_POST["purpose"]))
{
$purposeError = "Purpose is required";
}
else
{
$purpose = test_input($_POST["purpose"]);
} // Checking null values inmessage.
if (empty($_POST["message"]))
{
$messageError = "Message is required";
}
else
 {
$message = test_input($_POST["message"]);
} // Checking null values inthe message.
if( !($name=='') && !($email=='') && !($purpose=='') &&!($message=='') )
{ // Checking valid email.
if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
{
$header= $name."<". $email .">";
$headers = "FormGet.com"; /* Let's prepare the message for the e-mail */
$msg = "Hello! $name Thank you...! For Contacting Us.
Name: $name
E-mail: $email
Purpose: $purpose

This is a Contact Confirmation mail. We Will contact You as soon as possible.";
$msg1 = " $name Contacted Us. Hereis some information about $name.
Name: $name
E-mail: $email
Purpose: $purpose
Message: $message "; /* Send the message using mail() function */
if(mail($email, $headers, $msg ) && mail("receiver_mail_id@xyz.com", $header, $msg1 ))
{
$successMessage = "Message sent successfully.......";
}
}
else
{ $emailError = "Invalid Email";
 }
 }
} 
function test_input($data)// Function for filtering input values.function test_input($data)
{
$data = trim($data);
$data =stripslashes($data);
$data =htmlspecialchars($data);
return $data;
}
?>
<?php include 'validation.php';?>
<!DOCTYPE HTML>
<html>
<head>
<title>PHP Contact Form with Validation</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="container">
<div class="main">
<h2>PHP Contact Form with Validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">">
<label>Name :</label>
<input class="input" type="text" name="name" value="">
<span class="error"><?php echo $nameError;?></span>
<label>Email :</label>
<input class="input" type="text" name="email" value="">
<span class="error"><?php echo $emailError;?></span>
<label>Purpose :</label>
<input class="input" type="text" name="purpose" value="">
<span class="error"><?php echo $purposeError;?></span>
<label>Message :</label>
<textarea name="message" val=""></textarea>
<span class="error"><?php echo $messageError;?></span>
<input class="submit" type="submit" name="submit" value="Submit">
<span class="success"><?php echo $successMessage;?></span>
</form>
</div>
</div>
</body>
</html>
/* Below line is used for online Google font */
@import url(https://fonts.googleapis.com/css?family=Raleway);
h2
{
background-color: #FEFFED;
padding: 15px 35px;
margin: -10px -50px;
text-align:center;
border-radius: 10px 10px 0 0;
}
hr
{
margin: 10px -50px;
border: 0;
border-top: 1px solid #ccc;
}
span
{
color:red;
}
div.container
{
width: 960px;
height: 610px;
margin:35px auto;
font-family: 'Raleway', sans-serif;
}
div.main
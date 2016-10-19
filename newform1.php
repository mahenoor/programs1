<?php
class User{
       
         public $nameErr =""; 
         public $emailErr = "";
         public $passwordErr = "";
         public $cpasswordErr = "";
         public $name = "";
         public $email = "";
         public $password = "";
         public $cpassword = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"]))
             {
               $nameErr = "Name is required";
            }else 
            {
               $name = test_input($_POST["name"]);
               }
            
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else 
            {
               $email = test_input($_POST["email"]);
               
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "please enter an email address"; 
               }
            }
            
            if (empty($_POST["password"])) {
               $passwordErr= "password is required";
            }else 
            {
             $password = test_input($_POST["password"]);
           

         }
            if (empty($_POST["cpassword"])) {
               $cpasswordErr = "cpassword is required";
            }else 
            {
               $cpassword = test_input($_POST["cpassword"]);
            }
            if($_POST['password']==$_POST['cpassword']){
                $password = test_input($_POST["password"]);
                 $cpassword = test_input($_POST["cpassword"]);
                 echo "password";
                 echo "cpassword";
            }
            else
            {
               echo "invalid password"
               echo "\n";
            }
         }
            function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
         require 'newform.html';
         echo "<h2>Your given values are as :</h2>";
         echo "<p>Your name is: $name </p>";
         echo "<p>your email address is:$email</p>";
         echo "<p>Your password is:$password</p>";
         echo "<p>your cpassword is: $cpassword</p>";
      }
         ?>
         $user1=new User();
         echo $user1;
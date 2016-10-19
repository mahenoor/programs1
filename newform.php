<?php
       
         $nameErr = $emailErr = $passwordErr = $cpasswordErr = "";
         $name = $email = $password = $cpassword = "";
         
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
             
            if($_POST['password']==$_POST['cpassword'])  //if(preg_match("/[a-z][A-Z]{6}/", '$password')){
             $password = test_input($_POST["password"]);
           //}

         }
            if (empty($_POST["cpassword"])) {
               $cpasswordErr = "cpassword is required";
            }else 
            {

             //  if(preg_match("/[a-z][A-Z]{6}/", '$cpassword')){
               $cpassword = test_input($_POST["cpassword"]);
            

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
         ?>
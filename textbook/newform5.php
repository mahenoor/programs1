<?php
       
        
         $name = $email = $password = $cpassword = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"]))
             {
               die('Name is required');
            }else 
            {
               $name = test_input($_POST["name"]);
               }
            
            
            if (empty($_POST["email"])) {
               die('Email is required');
            }else 
            {
               $email = test_input($_POST["email"]);
               
               
            }
            
            if (empty($_POST["password"])) {
               die('password is required');
              
               
            }else 
            {
             
             
             $password = test_input($_POST["password"]);
             if(!preg_match("/[a-z][A-Z]{6}/", $password)){
                  die('password should be more than 6 characters');
               }
           

         }
            if (empty($_POST["cpassword"])) {
               die('cpassword is required');
            }else 
            {

            
               $cpassword = test_input($_POST["cpassword"]);
                 if(!preg_match("/[a-z][A-Z]{6}/", $cpassword)){
                  die('password should be more than 6 characters');
               }

            
            }
            
            if($_POST['password']==$_POST['cpassword']){
               
               $password = test_input($_POST["password"]);
               $cpassword = test_input($_POST["cpassword"]);
               
               }
            else
            {
               die('invalid password');
               echo "<br>";
            }}
         
            function test_input($data) {
           
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
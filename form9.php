<?php
       
      
         $name = $email = $password = $cpassword ="";
        // $nameErr=$emailErr=$passwordErr=$confirmationpasswordErr="";
        
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
          
            if (empty($_POST["name"]))
             {
               die('Name is required');
             }else 
             {
               $name = $_POST["name"];
             }
            
            
            if (empty($_POST["email"])) {
               die('Email is required');
            }else 
            {
               $email = $_POST["email"];
            }
            
            if (empty($_POST["password"])) {
               die('password is required');
            }else 
            {
             $password = $_POST["password"];
             if(!preg_match("/[a-z]{6}/", $password)){
                 die('password should be more than 6 characters');
             }
           }
            if (empty($_POST["cpassword"])) {
               die('cpassword is required');
            }else 
            {
            $cpassword = $_POST["cpassword"];
            if(!preg_match("/[a-z]{6}/", $cpassword)){
                die('password should be more than 6 characters');
             }
             }
            if($_POST['password']==$_POST['cpassword']){
               
               $password = $_POST["password"];
               $cpassword = $_POST["cpassword"];
               }
            else
            {

               die("invalid password");
               echo "<br>";
            }
         }
            
         require 'newform1.html';
         if(isset($_POST['submit'])){
         echo "<h2>Your given values are as :</h2>";
         echo "<p>Your name is: $name </p>";
         echo "<p>your email address is:$email</p>";
         echo "<p>Your password is:$password</p>";
         echo "<p>your cpassword is: $cpassword</p>";
         
       }

?>
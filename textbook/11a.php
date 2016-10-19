<?php
         
         // define variables and set to empty values
        $nameErr = "";
         $emailErr = "";
       $passwordErr = "";
         $confirmpasswordErr = "";
        $name = "";
          $email = "";
          $password = "";
         $confirmpassword = "";

                  
         if($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
              $name = test_input($_POST["name"]);
            }
            
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
         //    if(!empty($_POST["password"])  && ($_POST["password"] == $_POST["confirmpassword"])) {
    //    $password = test_input($_POST["password"]);
      //  $confirmpassword = test_input($_POST["confirmpassword"]);
    //    if (strlen($_POST["password"]) <= '8') {
      //      $passwordErr = "Your Password Must Contain At Least 8 Characters!";
     //   }
    //    elseif(!preg_match("#[0-9]+#",$password)) {
      //      $passwordErr = "Your Password Must Contain At Least 1 Number!";
       // }
     //   elseif(!preg_match("#[A-Z]+#",$password)) {
       //     $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
       // }
     //   elseif(!preg_match("#[a-z]+#",$password)) {
       //     $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
       // } else {
         //   $confirmpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
      //  }}
    
            
            if (empty($_POST["password"])) 
            {
               $passwordErr = "password is required";
           }else 
            {
               $password = test_input($_POST["password"]);
              //  if(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{6,}$/', $password)) {
   // echo 'the password does  meet the requirements!';
 }
          
            
            
            
         if (empty($_POST["confirmpassword"])) {
           $confirmpasswordErr = "password is required";
        }else {
             $confirmpassword= test_input($_POST["confirmpassword"]);
           }
            
            
         
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }}
         require "11.html";
         
         echo "<h2>Your given values are as :</h2>";
         echo ("<p>Your name is $name</p>");
         echo ("<p> your email address is $email</p>");
         echo ("<p>Your password is $password</p>");
         echo ("<p>your confirmpassword info $confirmpassword</p?");
         ?>
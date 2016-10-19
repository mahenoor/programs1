<?php
       
        
         $uname = $email = $upassword = $cpassword ="";
        
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
          
           //if (empty($_POST["Username"]))
         //  {
              //die('Username is required');
        /// }
            // else 
             //{
               $uname = $_POST["uname"];
            // }
            
            
           // if (empty($_POST["email"]))
             //{
              // die('Email is required');
            //}
            //else 
            //{
               $email = $_POST["email"];
            //}
            
            //if (empty($_POST["password"])) 
            //{
              // die('password is required');
            //}
            //else 
            //{
             $upassword = $_POST["upassword"];
             if(!preg_match("/[a-z]{6}/", $upassword)){
                 die('password should be more than 6 characters');
             }
           //}
            
           // if (empty($_POST["cpassword"])) {
             //  die('cpassword is required');
           // }
           // else 
         //   {
            $cpassword = $_POST["cpassword"];
            if(!preg_match("/[a-z]{6}/", $cpassword)){
                die('password should be more than 6 characters');
             }
           //  }
            if($_POST['upassword']==$_POST['cpassword']){
               
               $upassword = $_POST["upassword"];
               $cpassword = $_POST["cpassword"];
               }
            else
            {

               die('invalid password');
               echo "<br>";
            }
         }
           
         require 'form4.html';
         if(isset($_POST['submit'])){
         echo "<h2>Your given values are as :</h2>";
         echo "<p>Your uname is: $uname </p>";
         echo "<p>your email address is:$email</p>";
         echo "<p>Your upassword is:$upassword</p>";
         echo "<p>your cpassword is: $cpassword</p>";
         
       }
         ?>
<?php
       
        class User
        {
         public $uname;           
         public $email;
         public $upassword;
         public $cpassword;
         
         public function process(){
               
               
            if(isset($_POST['uname']))
              { 
                $name = $_POST['uname'];
               } 
            
              
             if(isset($_POST['email']))
              { 
                $email= $_POST['email'];
                 }
                
             
             if(isset($_POST['upassword']))
              { 
                $upassword= $_POST['upassword']; 
              }  
             if(!preg_match("/[a-z]{6}/", $upassword)){
                die('upassword should be more than 6 characters');
            }
            
             
            //$cpassword = $_POST['cpassword'];
             if(isset($_POST['cpassword']))
              { 
                $cpassword= $_POST['cpassword'];
                 }  
           if(!preg_match("/[a-z]{6}/", $cpassword)){
               die('cpassword should be more than 6 characters');
             }
           
           
            if($_POST['upassword']==$_POST['cpassword']){
               
               $upassword = $_POST['upassword'];
               $cpassword = $_POST['cpassword'];
               }
            else
            {

               die('invalid password');
               echo "<br>";
            }
         
       
          
         
         if(isset($_POST['submit'])){
           
         echo "<h2>Your given values are as :</h2>";
         echo "<p>Your uname is: </p>".$uname;
         echo "<p>your email address is:</p>".$email;
         echo "<p>Your upassword is:</p>".$upassword;
         echo "<p>your cpassword is:</p>".$cpassword;
      }
         }
       }
         
          require 'form4.html';
         
         $user2=new User();
        
          
          echo $user2->process();
        
       


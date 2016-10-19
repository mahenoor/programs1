<?php
require '11d.php';
require '9aaa.html';
// If the values are posted, insert them into the database.
if (isset($_POST['cpassword']) && isset($_POST['password'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    //$slquery = "SELECT 1 FROM register WHERE email = '$email'";
    //$selectresult = mysql_query($slquery);
    //if(mysql_num_rows($selectresult)>0)
    //{
      //  die('email already exists');
  //  }

   // $query = "INSERT INTO `register` (username, password,confirmpassword, email) VALUES ('$username', '$password', '$cpassword', '$email')";
   // $result = mysql_query($query);
   // if($result){
  //      $msg = "User Created Successfully.";
 //   }
}

?>
<?php
class Register{
public $name;
public $email;
public $password;
public $cpassword;
public function name($name){
	$this->name=$name;
}
public function email($email){
	$this->email=$email;

}
public function password($password){
	$this->password=$password;
}
public function cpassword($cpassword){
	$this->cpassword=$cpassword;
}
public function validate1($password){
	if(!preg_match("/[a-z]{6}/", $password)){
      die('password should be more than 6 characters');
       }
}
public function validate2($cpassword){
	if(!preg_match("/[a-z]{6}/", $cpassword)){
      die('cpassword should be more than 6 characters');
       }
}
public function validate3($password,$cpassword){
	if($password==$cpassword){
		$this->password=$password;
		$this->cpassword=$cpassword;
	}
}
public function display(){

	echo "the information is:";
	echo "the name is:".$this->name;
	echo "the email is:".$this->email;
	echo "the password is:".$this->password;
	echo "the cpassword is:".$this->cpassword;

}

}
$reg1=new Register();
echo $reg1->name('mahe');
echo $reg1->email('mahenoor04@gmail.com');
echo $reg1->password('com');
echo $reg1->cpassword('com');
echo $reg1->validate1('com');
echo $reg1->validate2('com');
echo $reg1->validate3('com','com');
echo $reg1->display();
?>
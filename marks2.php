<?php
       //$english=$kannada=$hindi=$maths=$science=$social="";
require 'marks1.html';
       if(isset($_POST['submit'])){
       $english = $_POST['num1'];
       $kannada = $_POST['num2'];
       $hindi = $_POST['num3'];
       $maths = $_POST['num4'];
       $science=$_POST['num5'];
       $social=$_POST['num6'];
       $total=$_POST['total'];
       $total=$english+$kannada+$hindi+$maths+$science+$social;
      if(($_POST['num1']>100)||($_POST['num2']>100)||($_POST['num3']>100)||($_POST['num4']>100)||($_POST['num5']>100)||($_POST['num6']>100)){
       echo "numbers should not be greater than 100";
}
else if(($_POST['num1']<0)||($_POST['num2']<0)||($_POST['num3']<0)||($_POST['num4']<0)||($_POST['num5']<0)||($_POST['num6']<0)){
       echo "numbers cant be negative";

}
else
{
       echo "<p>english is:$english</p>";
         echo "<p>kannada is:$kannada</p>";
           echo "<p>hindi is:$hindi</p>";
             echo "<p>maths is:$maths</p>";
               echo "<p>science is:$science</p>";
                 echo "<p>social is:$social</p>";
                 echo "<p>total is:$total</p>";
}
}?>
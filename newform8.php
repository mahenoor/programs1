<?php
       $english = $_POST['num1'];
       $kannada = $_POST['num2'];
       $hindi = $_POST['num3'];
       $maths = $_POST['num4'];
       $science=$_POST['num5'];
       $social=$_POST[' num6'];


?>
<html>
       <title>PHP - Add two numbers</title>
       <body>
              <form action="addtwonumbers.php" method="post">
                     <input type="text" name="english" value="" />
                     <input type="text" name="kannada" value="" />
                     <input type="text" name="hindi" value="" />
                     <input type="text" name="maths" value="" />
                     <input type="text" name="science" value="" />
                     <input type="text" name="social" value="" />
                     <input type="submit" value="Calculate values"/>
              </form>
              Answer : <?php echo ($english+$kannada+$hindi+$maths+$science+$social);?>
</html>
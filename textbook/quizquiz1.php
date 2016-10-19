onclick="document.write('<?php //call a PHP function here ?>');"

 <?php
          function hello(){
              echo "Hello";
          }
    ?>

<input type="button" name="Release" onclick="document.write('<?php hello() ?>');" value="Click to Release">
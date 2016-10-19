    <h2>
    Form with multiple submit buttons:
    </h2>
     
    <form action="process_main.php" method="get">
      <label for="fname">First name: <input type="text" id="fname" name="fname"><br><br>
      <label for="lname">Last name: <input type="text" id="lname" name="lname"><br><br>
     <input type="submit" value="Default Submit"> 
     <input type="submit" formaction="process1.php" value="Submit to Page1"> 
     <input type="submit" formaction="process2.php" value="Submit to Page2"> 
     <input type="submit" formaction="process3.php" value="Submit to Page3">
    </form>
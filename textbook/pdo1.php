 <?php
$servername = "localhost";
$username = "root";
$password = "compass";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=wednesday", $username, $password);
    // set the PDO error mode to exception
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    die('could not connect');
    }
    $statement=$pdo->prepare('select * from student');
    $statement->execute();
    $results=$statement->fetchAll(PDO::FETCH_OBJ);
    var_dump($results[0]->name);
    require 'pdo11.php';
?> 
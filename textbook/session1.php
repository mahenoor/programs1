<?php

session_start();

$_SESSION['test'] = 42;
$test = 43;
echo $_SESSION['test'];

?>

Load the page, OK it displays 42, reload the page... it displays 43.

The solution is to do this after each time you do a session_start() :

<?php

if (ini_get('register_globals'))
{
    foreach ($_SESSION as $key=>$value)
    {
        if (isset($GLOBALS[$key]))
            unset($GLOBALS[$key]);
    }
}

?>
<?php
session_start();
require_once("studentDB.inc");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if((!empty($_POST['username'])) && (!empty($_POST['password'])))
    {
        $db = new StudentAccess("Courses");
        $username = $db->cleaninput($_POST['username']);
        $password = $db->cleaninput($_POST['password']);
        if($db->getuser2($username, $password) == 'admin')
        {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header('Location: admin.html');
        }
        elseif($db->getuser2($username, $password) > 1)
        {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            echo "sessions set";
            header('Location: userprofile.php');
        }
        else
        {
            echo "Invalid username/password combination"; 
        }

    

    }
    else
    {
        header('WWW-Authenticate: Basic realm="Restricted Section"');
        header('HTTP/1.0 401 Unauthorized');    
    }
}


//echo $username . " " . $password . PHP_EOL;

?>

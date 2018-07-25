<?php
session_start();
require_once("studentDB.inc");
require_once("test1.php");
require_once("htmltest.php");
if (isset($_SESSION['username']) && isset($_SESSION['password']))
{
//     $db = new StudentAccess("Courses"); // initiates a MySQL database connection
    $table = $_GET['table']; // gets the table from the select menu
    $mongo = new mongo(); //initiates a mongodb connection
    $html = new htmltables('Courses'); // initiates a htmltable object

    switch($table)
    {
        case "courseinfo":
            $html->printtable("courseinfo");
            $html->addarecord('courseinfo');
            $html->deletearecord('courseinfo');
            break;
        case "books":
            //echo "$table isnt ready yet";
          //  $db->printtable('books');
            $mongo->find();
            break;
        case "class_table":
            //echo "$table isnt ready yet";
            $html->printtable("class_table");
            $html->addarecord('class_table');
            $html->deletearecord('class_table');
            break;
        case "users":
            $html->printtable("users");
            $html->addarecord('users');
            $html->deletearecord('users');
            break;
        
    }
    echo "<a href='logout.php'> LOGOUT </a>";
}
else
{   
    header('WWW-Authenticate: Basic realm="Restricted Section"');
    header('HTTP/1.0 401 Unauthorized');
}

?>
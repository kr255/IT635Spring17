<?php
session_start();
require_once 'vendor/autoload.php';
require_once("studentDB.inc");
require_once("test1.php");
require_once("htmltest.php");
if (isset($_SESSION['username']) && isset($_SESSION['password']))
{
    echo "
    <div id=\"searchform\" align=\"center\">
    <form>
    <fieldset>
    <legend align=\"center\"><h3> BOOK SEARCH</h3> </legend><br>

    Class ID:
    <input type = \"text\" name=\"course_name\" id=\"course_name\" style=\"text-align:center\" size=\"5\"><br>
    <br>
    
    <input type=\"button\"  id=\"1\" value=\"Submit\" onclick=\"marketplace();\"></input>
    </fieldset>
    </form>
    </div>
    <div id=\"results\" align=\"center\">dadasdad</div>";
    echo "<script type=\"text/javascript\" src=\"myjs.js\"></script>";

}
?>
<?php
session_start();
require_once("studentDB.inc");
require_once("test1.php");
require_once("htmltest.php");
if (isset($_SESSION['username']) && isset($_SESSION['password']))
{
    echo "
    <div id=\"demo\">Search for a Book to Sell</div>
    <form>
    <fieldset>
    <legend align=\"center\"><h3> BOOK GUIDE</h3> </legend><br>

    Class ID:
    <input type = \"text\" name=\"course_name\" id=\"course_name\"><br>
    <br>

    ISBN: 
    <input type = \"text\" name=\"ID\" id=\"course_book\"><br>
    <br>
    <input type=\"button\"  id=\"1\" value=\"Submit\" onclick=\"validate();\"></input>
    </fieldset>
    </form>";
    
    echo "
    
    <form>
    <fieldset>
    <legend align=\"center\"><h3> Insert a Book to Sell</h3> </legend><br>

    Class ID:
    <input type = \"text\" name=\"course_name\"  id=\"course_name2\" required><br>
    <br>
    ISBN: 
    <input type = \"text\" name=\"course_book\"  id=\"course_book2\"><br>
    <br>
    Book Title: 
    <input type = \"text\" name=\"title_book\"  id=\"title_book\" ><br>
    <br>
    Price: 
    <input type = \"text\" name=\"price_book\"  id=\"price_book\"><br>
    <br>
    Contact: 
    <input type = \"text\" name=\"contact_book\"  id=\"contact_book\"><br>
    <br>
    <input type=\"button\"  id=\"2\" value=\"Submit\" onclick=\"insert_validate();\" required></input>
    <div id=\"demo2\"></div>
    </fieldset>
    </form>";

    echo "<script type=\"text/javascript\" src=\"myjs.js\"></script>";
    echo "<a href='logout.php'> LOGOUT </a>";
    echo "<a align =\"right\" href='marketplace.php'> marketplace </a>";
}

?>

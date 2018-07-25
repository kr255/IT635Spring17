<?php
    session_start();
    require_once("studentDB.inc");
    if (isset($_SESSION['username']) && isset($_SESSION['password']))
    {

        $db = new StudentAccess("Courses");

        $delcourseID = $_GET["delcourseID"];
        $delcourseName = $_GET["delcourse_name"];
        $delcourseSem = $_GET["delcourse_semester"];
        $delcourseProf = $_GET["delcourse_professor"];

        if($db->deletecourse($delcourseID, $delcourseName, $delcourseSem, $delcourseProf, "courseinfo") != true)
        {
            echo "record not deleted (in delcourse.php)";
        }
        $dsip = $db->printtable('courseinfo');
        echo "<a href='logout.php'> LOGOUT </a>";
    }
    else
    {
        header('WWW-Authenticate: Basic realm="Restricted Section"');
        header('HTTP/1.0 401 Unauthorized');
    }
    
?>
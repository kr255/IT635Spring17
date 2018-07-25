<?php

require_once("studentDB.inc");

$db = new StudentAccess("Courses");

$course1 = $_GET["course1"];
$course2 = $_GET["course2"];
$course3 = $_GET["course3"];
$course4 = $_GET["course4"];

// echo $course1, $course2, $course3, $course4 . PHP_EOL;
if(!empty($course1))
{   
    
    $db->generatecourse($course1);
}
else
{
    echo "course one empty" . PHP_EOL . "<br><br>";
}
if(!empty($course2))
{
    $db->generatecourse($course2);
}
else
{
    echo "course two empty" . PHP_EOL . "<br><br>";
}
if(!empty($course3))
{
    $db->generatecourse($course3);
}
else
{
    echo "course three empty" . PHP_EOL . "<br><br>";
}
if(!empty($course4))
{
    $db->generatecourse($course4);
}
else
{
    echo "course four empty" . PHP_EOL . "<br><br>";
}
// if($db->deletecourse($delcourseID, $delcourseName, $delcourseSem, $delcourseProf, "courseinfo") != true)
// {
//     echo "record not deleted (in delcourse.php)";
// }
// $dsip = $db->gettable('courseinfo');


?>
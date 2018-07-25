<?php

require_once("studentDB.inc");
require_once("test1.php");
require_once("htmltest.php");
$db = new StudentAccess("Courses");
$mongo = new mongo();
$html = new htmltables('Courses');

$addcourseID = $_GET["addcourseID"];
$addcourseName = $_GET["addcourse_name"];
$addcourseSem = $_GET["addcourse_semester"];
$addcourseProf = $_GET["addcourse_professor"];

//echo $addcourseID . $addcourseName . $addcourseSem . $addcourseProf . PHP_EOL;
if($db->addcourse($addcourseID, $addcourseName, $addcourseSem, $addcourseProf, "courseinfo") != true)
{
    echo "record not entered properly (in addcourse)";
}

$dsip = $db->printtable('courseinfo');


/*
$courseIDd = $_POST["courseIDd"];
$courseNamed = $_POST["course_named"];
$courseSemd = $_POST["course_semesterd"];
$courseProfd = $_POST["course_professord"];*/


// $add = $db->addcourse($courseID, $courseName, $courseSem, $courseProf, "courseinfo");
// $delete = $db->deletecourse($courseIDd, $courseNamed, $courseSemd, $courseProfd, "courseinfo");
// 
// echo $courseID . " " . $courseName . " " . $courseSem . " " . $courseProf . PHP_EOL;
// 
// $select = $db->selectcourseRecord($courseID, $courseName, $courseSem, $courseProf, 'courseinfo');
// $newres = array_pop($select);




?>
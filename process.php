<?php

require_once("studentDB.inc");
$db = new StudentAccess("Courses");

$course_name = $_GET["course_name"];
$course_book = $_GET["course_book"];
//echo $course_name . " " . $course_book . PHP_EOL;

// echo "<fieldset><legend align=\"center\"><h3>Course Information</h3></legend><br>";
//
if(!empty($course_name) or !empty($course_book))
{
$displayall = $db->scourse($course_name, $course_book);
//$disp=$db->gettable('courseinfo');
//echo PHP_EOL;
}
else{echo "enter something";}
// 
//echo "</fieldset>";
 
// echo "<fieldset>";
// echo "<legend align=\"center\"><h3> Add a Record </h3> </legend><br>";
// echo "<form action= \"process.php\" method=\"post\">";
// echo " Course Number  : <input = \"text\" name=\"courseID\" id=\"courseID\"><br>";
// echo " Class Name     : <input type = \"text\" name=\"course_name\" id=\"course_name\"><br>";
// echo " Class Semester : <input type = \"text\" name=\"course_semester\" id=\"course_semester\"><br>";
// echo " Class Professor: <input type = \"text\" name=\"course_professor\" id=\"course_professor\"><br><br>";
// echo " <input type=\"submit\" value=\"submit\">";
// echo "</form>";
// echo "</fieldset>";
// 
// echo "<fieldset>";
// echo "<legend align=\"center\"><h3> Delete a Record </h3> </legend><br>";
// echo "<form action= \"process.php\" method=\"post\">";
// echo " Course Number  : <input = \"text\" name=\"courseIDd\" id=\"courseIDd\"><br>";
// echo " Class Name     : <input type = \"text\" name=\"course_named\" id=\"course_named\"><br>";
// echo " Class Semester : <input type = \"text\" name=\"course_semesterd\" id=\"course_semesterd\"><br>";
// echo " Class Professor: <input type = \"text\" name=\"course_professord\" id=\"course_professord\"><br><br>";
// echo " <input type=\"submit\" value=\"submit\">";
// echo "</form>";
// echo "</fieldset>";
// 
// 
// $courseID = $_POST["courseID"];
// $courseName = $_POST["course_name"];
// $courseSem = $_POST["course_semester"];
// $courseProf = $_POST["course_professor"];
// 
// $courseIDd = $_POST["courseIDd"];
// $courseNamed = $_POST["course_named"];
// $courseSemd = $_POST["course_semesterd"];
// $courseProfd = $_POST["course_professord"];
// 
// $add = $db->addcourse($courseID, $courseName, $courseSem, $courseProf, "courseinfo");
// $delete = $db->deletecourse($courseIDd, $courseNamed, $courseSemd, $courseProfd, "courseinfo");

//echo $courseID . " " . $courseName . " " . $courseSem . " " . $courseProf . PHP_EOL;
/*
$select = $db->selectcourseRecord($courseID, $courseName, $courseSem, $courseProf, 'courseinfo');
$newres = array_pop($select);
//print_r($newres);
echo "<table border = \"1\" cellpadding=\"10\">";
foreach($newres as $k => $v)
{	
	echo "<tr>";
		echo "<td>" . $k . "</td>";
		echo "<td>" . $v . "</td>";
	echo "</tr>";
}
echo "</table>";
*/


//$students = $studentDB->getStudentRecordstable("courseinfo");



?>

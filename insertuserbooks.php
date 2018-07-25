<?php
require_once("studentDB.inc");
require_once("test1.php");
$db = new StudentAccess("Courses");
$mongo = new mongo();

$course_name = $_GET["course_name2"];
$course_book = $_GET["course_book2"];
$title_book = $_GET["title_book"];
$price_book = $_GET["price_book"];
$contact_book = $_GET["contact_book"];


$insert = $mongo->insertuserbook($course_name, $course_book, $title_book, $price_book, $contact_book);


//$disp=$db->gettable('courseinfo');
//echo PHP_EOL;

// else{echo "enter something";}

?>
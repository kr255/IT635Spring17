<?php
require_once("studentDB.inc");

$db = new StudentAccess("Courses");

$username = $_POST["username"];
$password = $_POST["password"];

if (!empty($username) && !empty($password))
{
	$query = $db->getAdmin($username, $password, "users");
	if($query != '0')
	{
		$student=$db->getStudentRecordstable("courseinfo");
	}
	else
	{
		echo "it returned a zero";
	}
}
else{
	echo "enter both username and password";
}


?>

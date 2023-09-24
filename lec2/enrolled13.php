<?php
$document_root = $_SERVER['DOCUMENT_ROOT'];
$file_path = "$document_root/lec2/data/enrolled.txt";
if (!file_exists($file_path)) {
	require('header.php');
	echo "<strong>No students enrolled.</strong>";
	require('footer.php');
	exit;
}
$fp = @fopen($file_path,'r');
if(!$fp) {
	require('header.php');
	echo "<strong>Enrollment list not available at this time. Please try again later.</strong>";
	require('footer.php');
	exit;
}
require ('enrolled_functions.php');
// display enrollments
require('header.php');
echo "<h1>Enrolled students</h1>";

e13_table_header();
while ($arr = fgetcsv($fp)) {
	e13_table_student($arr[0],$arr[1],$arr[2],$arr[3]);
}
e13_table_end();


require('footer.php');
?>

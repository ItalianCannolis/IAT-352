<?php
	if( isset($_GET['gender'])) $g=$_GET['gender'];
?>
<html>
<head></head>
<body>
<h1>Form input examples:</h1>

<?php 
   	echo "<p>Last selected value: ";
	echo !empty($g) ? $g : "none"; 
	echo "</p>"
?>

<form action="page7.php">
  <input type="radio" name="gender" value="male">Male<br>
  <input type="radio" name="gender" value="female">Female<br>
  <input type="radio" name="gender" value="other">Other<br/>
  <input type="submit" border=0 value="Submit">
</form>


</body>
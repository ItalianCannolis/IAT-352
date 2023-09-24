<?php
	$fn = $_GET['firstname'];
	$ln = $_GET['lastname'];
?>
<html>
<head></head>
<body>
<h1>Course Sign Up</h1>

<?php
	if (!empty($fn) && !empty($ln) ) {
		echo "<p>The following person has signed up:";
		echo htmlspecialchars($fn) . " " . htmlspecialchars($ln);
		echo "</p>";
	} else {
		echo "<p>Please provide both the first and last name.</p>";
		echo "<p><a href=\"page3.php\">Return to the sign up page</a></p>";
	}
?>
</body>
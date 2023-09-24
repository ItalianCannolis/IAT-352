<html>
<head></head>
<body>

<h1>Course Sign Up</h1>

<p>The following person has signed up: 
<?php
	echo htmlspecialchars($_GET['firstname']) . " " . htmlspecialchars($_GET['lastname']);
?>
</p>

</body>
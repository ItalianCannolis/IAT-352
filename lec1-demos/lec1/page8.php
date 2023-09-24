<?php if( isset($_GET['gender'])) $g=$_GET['gender']; ?>
<html><head></head><body>
<h1>Form input examples:</h1>

<?php 
   	echo "<p>Last selected value: ";
	echo !empty($g) ? $g : "none"; 
	echo "</p>";
?>
<form action="page8.php">
  <input type="radio" name="gender" value="male" 
  		<?php if (!empty($g) && $g=="male") echo "checked"; ?> >Male<br>
  <input type="radio" name="gender" value="female" 
  		<?php if (!empty($g) && $g=="female") echo "checked"; ?> >Female<br>
  <input type="radio" name="gender" value="other" 
  		<?php if (!empty($g) && $g=="other") echo "checked"; ?> >Other<br/>
  <input type="submit" border=0 value="Submit">
</form>
</body>



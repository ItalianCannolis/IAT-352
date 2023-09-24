<?php 
if( isset($_GET['gender'])) $g=$_GET['gender']; 
if( isset($_GET['previous'])) $p=$_GET['previous']; 
?>
<html><head></head><body>
<h1>Form input examples:</h1>

<?php 
   	echo "<p>Last selected value: " . (!empty($g) ? $g : "none") . "</p>";
   	echo "<p>Prior to last selected value: " . (!empty($p) ? $p : "none") . "</p>";
?>
<form action="page9.php">
  <input type="radio" name="gender" value="male" 
  		<?php if (!empty($g) && $g=="male") echo "checked"; ?> >Male<br>
  <input type="radio" name="gender" value="female" 
  		<?php if (!empty($g) && $g=="female") echo "checked"; ?> >Female<br>
  <input type="radio" name="gender" value="other" 
  		<?php if (!empty($g) && $g=="other") echo "checked"; ?> >Other<br/>
  <?php 
  	if (!empty($g)) echo "<input type=\"hidden\" name=\"previous\" value=\"$g\"></br>"; 
  ?>
  <input type="submit" border=0 value="Submit">
</form>
</body>



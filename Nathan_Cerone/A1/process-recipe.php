<html>

<?php
        if(isset ($_POST['recipeName']) && isset($_POST['recipeDesc']) && isset($_POST['servingSize']) && isset($_POST['qty1']) && isset($_POST['measurement1']) && isset($_POST['item1']) && isset($_POST['recipeStep']) && isset($_POST['recipeTags']) ){

            if(empty ($_POST['recipeName']) || empty($_POST['recipeDesc'])) {
                echo "No recipe name or description provided.";
            }
            else if(empty ($_POST['servingSize'])) {
                echo "Please select a serving size.";
            }
            else if(empty ($_POST['qty1']) || empty($_POST['measurement1']) || empty($_POST['item1'])) {
                echo "The first ingredient slot is missing information, is it placed in the wrong slot?";
            }
            else if(empty ($_POST['recipeStep'])) {
                echo "Please provide steps to the recipe.";
            }
            else{
                echo "Your recipe name is " .$_POST['recipeName'] . " with the description of: " .$_POST['recipeDesc'] . ". The serving size is ".$_POST['servingSize']. " and the first ingredient is ".$_POST['qty1']. " ".$_POST['measurement1']. " of ".$_POST['item1']. ".";
                
            }
        }
    ?>

</html>
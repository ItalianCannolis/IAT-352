<html>

<?php
        /*
        if(isset ($_POST['recipeName']) && isset($_POST['recipeDesc']) && isset($_POST['servingSize']) && isset($_POST['0qty']) && isset($_POST['0unit']) && isset($_POST['0item']) && isset($_POST['recipeStep']) && isset($_POST['recipeTags']) ){

            if(empty ($_POST['recipeName']) || empty($_POST['recipeDesc'])) {
                echo "No recipe name or description provided.";
            }
            else if(empty ($_POST['servingSize'])) {
                echo "Please select a serving size.";
            }
            else if(empty ($_POST['0qty']) || empty($_POST['0unit']) || empty($_POST['0item'])) {
                echo "The first ingredient slot is missing information, is it placed in the wrong slot?";
            }
            else if(empty ($_POST['recipeStep'])) {
                echo "Please provide steps to the recipe.";
            }
            
            else{
                echo "Your recipe name is " .$_POST['recipeName'] . " with the description of: " .$_POST['recipeDesc'] . ". The serving size is ".$_POST['servingSize']. " and the first ingredient is ".$_POST['0qty']. " ".$_POST['0unit']. " of ".$_POST['0item']. ".";
                
            }
            
        }
        */
        global $combined;
        function implodeCSVString(){
            $items = array();
            for ($i = 0; $i< 10; $i++){

                $qtyname = strval($i)."qty";
                $unitname = strval($i)."unit";
                $itemname = strval($i)."item";
                global $combined;
                $combinedstring;

                if( !(empty ( $_POST[$qtyname]) || empty($_POST[$unitname]) || empty($_POST[$itemname])) ){

                    $combinedstring = $_POST[$qtyname]."#".$_POST[$unitname]."#".$_POST[$itemname];
                    $items[$i] = $combinedstring;
                }
                else{
                    break;
                }

            }
            $combineditems = implode('+++',$items);
            $combined = $_POST['recipeName'].",".$_POST['recipeDesc'].",".$_POST['servingSize'].",".$combineditems.",".$_POST['recipeStep'].",".$_POST['recipeTags'];
            
            echo $combined;
        }

        function writeToFile(){
            $file = fopen('recipes/recipes.csv','r');
            global $combined;
            $duplicate = false;
            while ($lineCSV = fgetcsv($file)){
              if($lineCSV[0] == $_POST['recipeName']){
                $duplicate = true;
                break;
              }
      
            }
            fclose($file);
      
            if (!$duplicate){
              $file = fopen('recipes/recipes.csv','a');
        
              fwrite($file, "\n".$combined);
              fclose($file);
            }

        }

        function redirect(){
            $newURL = "list_recipes.php";
            header('Location: '.$newURL);
        }


        implodeCSVString();
        writeToFile();
        redirect();


        ?>

</html>
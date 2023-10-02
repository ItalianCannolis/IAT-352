<!-- first, you should read the csv file and get the data -->

<!-- then simply loop over the data and create a new html list entry with hrefs to the e_show_recipe.php file -->
<!-- if you want to save yourself some time, make the hrefs something like -->

<!-- where $index is the index of the recipe in the array -->

<!-- then, in the e_show_recipe.php file, you can get the index from the url and use it to get the recipe from the array! -->
<!-- NEAT, this way you don't have to explicitly define a get request -->


<?php
    
    $recipes = array();
    $recipesnames = array();
    function readRecipes(){
        global $recipes;
        $file = fopen('recipes/recipes.csv','r');
        $i = 0;


        while ($lineCSV = fgetcsv($file)){
      
            $recipes[$i] = $lineCSV;
            $i++;
    
        }
        fclose($file);


    }

    function getRecipes(int $recipenum){
        global $recipes;
        
        return $recipe = $recipes[$recipenum];

    }

    readRecipes();
    $url = $_SERVER['REQUEST_URI'];
    $urlcheck = parse_url($url, PHP_URL_PATH);
    $urlcheck = str_split($urlcheck);
    $urlcheck = implode($urlcheck);

    if($urlcheck != "/IAT-352/Nathan_Cerone/A1/e_show_recipe.php"){
        for ($index = 0; $index< count($recipes); $index++){
            echo "<li><a href='e_show_recipe.php?index=$index'>" . htmlspecialchars($recipes[$index][0]) . "</a></li>";
        }
    }

?>
<!-- simply extract the $index value from the URL -->

<!-- then use it to get the correct recipe row from the array -->

<!-- then display the recipe's information! -->

<!-- you should add a button to navigate back to d_list_recipes.php -->

<!-- and that's it! -->

<?php
    include 'list_recipes.php';
    $index = " ";

    extractindex();

    $recipename = $recipes[$index][0];
    $recipedescription = $recipes[$index][1];  
    $recipeserving = $recipes[$index][2];
    $recipeitems = array();
    $recipeinstructions = $recipes[$index][4];
    $recipetags = array();




    extractlistvalues();
    testprint();
    function extractindex(){
        $curPageName =  $_SERVER['REQUEST_URI'];
        global $index;
        $indexcheck = parse_url($curPageName, PHP_URL_QUERY);
        $indexcheck = str_split($indexcheck);

        for ($i = 0; $i< count($indexcheck); $i++){

            if($i > 5){
              $index = $index.$indexcheck[$i];
    
            }
    
        }

        $index = explode(" ", $index);
        $index = (int)$index[1];
    }

    function extractlistvalues(){
        
        global $recipes;
        global $index;
        global $recipetags;
        global $recipeitems;

        $recipeitemlist = $recipes[$index][3];
        $recipeitemlist = explode("+++",$recipeitemlist);

        for ($i = 0; $i< count($recipeitemlist); $i++){

            $recipeitems[$i] = explode("#",$recipeitemlist[$i]);
    
        }
    
        if(count($recipes[$index]) > 5){
            $y = 0;
            for ($i = 5; $i< count($recipes[$index]); $i++){
    
               $recipetags[$y] = $recipes[$index][$i];
               $y++;
    
            }
        }

    }

    function testprint(){

        global $recipename;
        global $recipedescription;
        global $recipeserving;
        global $recipeitems;
        global $recipeinstructions;
        global $recipetags;

        echo $recipename;
        echo "<br>";
        echo $recipedescription;
        echo "<br>";
        echo $recipeserving;
        echo "<br>";


        for ($i = 0; $i< count($recipeitems); $i++){

            for ($y = 0; $y< count($recipeitems[$i]); $y++){
                echo $recipeitems[$i][$y]." ";            
                
            }   
            echo "<br>";
        }


        echo $recipeinstructions;
        echo "<br>";

        if(count($recipetags) > 0){
            for ($i = 0; $i< count($recipetags); $i++){
        
                echo $recipetags[$i];
                echo "<br>";
    
            }
        }


    }







?>
<?php

// I recommend creating the following functions:
// generateRecipeNameSection()
// generateIngredientsSection()
//		this function should create 3 inputs (iquantity, iunit and iname) X 10 times in a loop
// generateInstructionsSection()
// create_recipe_form()
//		this function should call the previous three functions to create a form.
//		the form should call c_submit_recipe.php when submitted, via a POST request.
//		also notice this is the only function being called in a_submit_recipe.php

// I'll get you started:
function create_recipe_form() {
    generateFormStart();
    generateRecipeNameSection();
    generateIngredientsSection();
    generateInstructionsSection();
    generateFormEnd();
}

function generateFormStart(){
        echo '<form method = "POST" action = "process-recipe.php">';
}
function generateFormEnd(){
    echo '        
        <input type = "submit" value = "Publish">

        </form>';
}


 function generateRecipeNameSection(){
    echo '

                <label> recipe name </label>
                <input type = "text" name = "recipeName" />
            <div>
                <label> recipe description </label>
                <input type = "text" name = "recipeDesc" />
            <div>      

                <label> This Serves: </label>
                <label> 1 Person </label>
                <input type = "radio" name = "servingSize" value = "single" checked>
                <label> 2 People </label>
                <input type = "radio" name = "servingSize" value = "double"> 
                <label> 3 People </label>
                <input type = "radio" name = "servingSize" value = "triple">
                ';
 }

 function generateIngredientsSection(){
    for ($i = 0; $i< 10; $i++){
        $qtyname = strval($i)."qty";
        $unitname = strval($i)."unit";
        $itemname = strval($i)."item";
        echo '
            <div class="threeColumn">
                <div>
                    <label> Quantity </label>
                    <input type = "text" name ='. $qtyname. '>
                </div>
                <div>
                    <label> Measurement </label>
                    <select name ='. $unitname. '>
                        <option value = "">None </option>
                        <option value = "pound">pound(s) </option>                
                        <option value = "gram">gram(s) </option>
                        <option value = "ounce">ounce(s) </option>
                        <option value = "piece">pcs </option>
                        <option value = "miliLiter">ml </option>
                        <option value = "tblSpoon">tbl spoon </option>
                        <option value = "teaSpoon">teaspoon </option>            
                        <option value = "cup">cup </option>          
                    </select> 
                </div>
                <div>
                    <label> Item </label>
                    <input type = "text" name ='. $itemname. '>  
                </div>
            </div>';
    }
 }

 function generateInstructionsSection(){
    echo '
            <label> recipe steps </label>
            <input type = "text" name = "recipeStep" /> 

            <div>
                <label> recipe tags (Seperate each tag with a comma) </label>
                <input type = "text" name = "recipeTags" /> 
            </div>
        ';
 }
 // and so on...

?>
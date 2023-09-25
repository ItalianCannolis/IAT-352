<html>
    <head>
    <link rel="stylesheet" href="css/style_sheet.css">
    </head>

    <?php
            /*if(isset ($_POST['program_type']) && isset($_POST['language_of_instruction']) && isset($_POST['country']) && isset($_POST['level_of_study']) && isset($_POST['term']) ){

            if(empty ($_POST['program_type']) || empty($_POST['language_of_instruction']) || empty($_POST['country']) || empty($_POST['level_of_study']) || empty($_POST['term'])) {
                echo "you did not enter your program type or language of instruction or country or level of study or term.";
            }
            else{

                echo "Your application is successfully submitted the following information is listed in the application:";

                echo "<li> ".$_POST['program_type']."</a></li>";
                echo "<li> ".$_POST['language_of_instruction']."</a></li>";
                echo "<li> ".$_POST['country']."</a></li>";
                echo "<li> ".$_POST['level_of_study']."</a></li>";
                echo "<li> ".$_POST['term']."</a></li>";

                
            }
        }
         */
    ?>
   
    <body>
        <form method = "POST" action = "add-recipe.php">


            <label> recipe name </label>
            <input type = "text" name = "recipeName" />
        <div>
            <label> recipe description </label>
            <input type = "text" name = "recipeDesc" />
        <div>      

            <label> This Serves: </label>
            <label> 1 Person </label>
            <input type = "radio" name = "servingSize" value = "single">
            <label> 2 People </label>
            <input type = "radio" name = "servingSize" value = "double"> 
            <label> 3 People </label>
            <input type = "radio" name = "servingSize" value = "triple">


        <div class="project" id="project2">
            <!--1st Box-->
            <div class="threeColumn">
                <div>
                    <label> Quantity </label>
                    <input type = "text" name = "qty1" />
                </div>
                <div>
                    <label> Measurement </label>
                    <select name = "measurement1">
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
                    <input type = "text" name = "item1" />  
                </div>
            </div>
            <!--2nd Box-->
            <div class="threeColumn">
                <div>
                    <label> Quantity </label>
                    <input type = "text" name = "qty2" />
                </div>
                <div>
                    <label> Measurement </label>
                    <select name = "measurement2">
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
                    <input type = "text" name = "item2" />  
                </div>
            </div>
            <!--3rd Box-->
            <div class="threeColumn">
                <div>
                    <label> Quantity </label>
                    <input type = "text" name = "qty3" />
                </div>
                <div>
                    <label> Measurement </label>
                    <select name = "measurement3">
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
                    <input type = "text" name = "item3" />  
                </div>
            </div>
            <!--4th Box-->
            <div class="threeColumn">
                <div>
                    <label> Quantity </label>
                    <input type = "text" name = "qty4" />
                </div>
                <div>
                    <label> Measurement </label>
                    <select name = "measurement4">
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
                    <input type = "text" name = "item4" />  
                </div>
            </div>
            <!--5th Box-->
            <div class="threeColumn">
                <div>
                    <label> Quantity </label>
                    <input type = "text" name = "qty5" />
                </div>
                <div>
                    <label> Measurement </label>
                    <select name = "measurement5">
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
                    <input type = "text" name = "item5" />  
                </div>
            </div>
            <!--6th Box-->
            <div class="threeColumn">
                <div>
                    <label> Quantity </label>
                    <input type = "text" name = "qty6" />
                </div>
                <div>
                    <label> Measurement </label>
                    <select name = "measurement6">
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
                    <input type = "text" name = "item6" />  
                </div>
            </div>
            <!--7th Box-->
            <div class="threeColumn">
                <div>
                    <label> Quantity </label>
                    <input type = "text" name = "qty7" />
                </div>
                <div>
                    <label> Measurement </label>
                    <select name = "measurement7">
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
                    <input type = "text" name = "item7" />  
                </div>
            </div>
            <!--8th Box-->
            <div class="threeColumn">
                <div>
                    <label> Quantity </label>
                    <input type = "text" name = "qty8" />
                </div>
                <div>
                    <label> Measurement </label>
                    <select name = "measurement8">
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
                    <input type = "text" name = "item8" />  
                </div>
            </div>
            <!--9th Box-->            
            <div class="threeColumn">
                <div>
                    <label> Quantity </label>
                    <input type = "text" name = "qty9" />
                </div>
                <div>
                    <label> Measurement </label>
                    <select name = "measurement9">
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
                    <input type = "text" name = "item9" />  
                </div>
            </div>
            <!--10th Box-->
            <div class="threeColumn">
                <div>
                    <label> Quantity </label>
                    <input type = "text" name = "qty10" />
                </div>
                <div>
                    <label> Measurement </label>
                    <select name = "measurement10">
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
                    <input type = "text" name = "item10" />  
                </div>
            </div>
        </div>

        <label> recipe steps </label>
        <input type = "text" name = "recipeStep" /> 

        <div>
            <label> recipe tags (Seperate each tag with a comma) </label>
            <input type = "text" name = "recipeTags" /> 
        </div>



        <input type = "submit" value = "Publish">

        </form>

    </body>
</html>
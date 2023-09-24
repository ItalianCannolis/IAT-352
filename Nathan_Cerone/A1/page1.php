<html>


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
        <form method = "POST" action = "homework_1.php">


            <label> recipe name </label>
            <input type = "text" name = "recipeName" />

            <label> recipe description </label>
            <input type = "text" name = "recipeDesc" />            

            <label> This Serves: </label>
            <label> 1 Person </label>
            <input type = "radio" name = "servingSize" value = "single">
            <label> 2 People </label>
            <input type = "radio" name = "servingSize" value = "double"> 
            <label> 3 People </label>
            <input type = "radio" name = "servingSize" value = "triple">


            <label> Program type </label>
            <select name = "program_type">
                <option value = "">-----------Select Your Program Type------- </option>
                <option value = "Exchange">Exchange </option>                

            </select>

            <label> Language of instruction </label>
            <select name = "language_of_instruction">
                <option value = "">-----------Select Your Language of Instruction------- </option>
                <option value = "Italian">Italian </option>                
                <option value = "Spanish">Spanish </option>
                <option value = "German">German </option>
                <option value = "Other">Other </option>
            </select>

            <label> Country </label>
            <select name = "country">
                <option value = "">-----------Select Your Country------- </option>
                <option value = "Italy">Italy </option>                
                <option value = "Spain">Spain </option>
                <option value = "Germany">Germany </option>
                <option value = "Other">Other </option>
            </select>

            <label> Level of study (at SFU) </label>
            <select name = "level_of_study">
                <option value = "">-----------Select Your Level of Study------- </option>
                <option value = "Undergrad">Undergrad </option>                
                <option value = "Grad">Graduate </option>
                <option value = "PhD or Post-Doctoral">PhD or Post-Doctoral </option>
                <option value = "PDP">PDP </option>
            </select>

            <label> Term </label>
            <select name = "term">
                <option value = "">-----------Select Your Term------- </option>
                <option value = "Fall">Fall </option>                
                <option value = "Spring">Spring </option>
                <option value = "Summer">Summer </option>
            </select>

            <input type = "submit" value = "Apply">

        </form>

    </body>
</html>
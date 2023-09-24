<html>

    <?php
        if(isset ($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['school_name']) && isset($_POST['gender']) && isset($_POST['school_year']) ){

            if(empty ($_POST['first_name']) || empty($_POST['last_name'])) {
                echo "you did not enter your first name or last name.";
            }
            else if(empty ($_POST['school_name'])) {
                echo "you did not enter your school name.";
            }
            else if(empty ($_POST['gender']) || empty($_POST['school_year'])) {
                echo "you did not enter your gender or school year.";
            }
            else{
                echo "Your first name is " .$_POST['first_name'] . " and your last name is " .$_POST['last_name'] . ". Your gender is ".$_POST['gender']. " and you're a ".$_POST['school_year']. " at ".$_POST['school_name']. ".";
                
            }
        }
        
    ?>

    <body>
        <form method = "POST" action = "form.php">
            <label> First Name </label>
            <input type = "text" name = "first_name" />
            <label> Last Name </label>
            <input type = "text" name = "last_name" />
            <label> School Name </label>
            <input type = "text" name = "school_name" />

            <label> Gender: </label>
            <label> male </label>
            <input type = "radio" name = "gender" value = "male">
            <label> female </label>
            <input type = "radio" name = "gender" value = "female"> 
            <label> other </label>
            <input type = "radio" name = "gender" value = "other">

            <label> School Year </label>
            <select name = "school_year">
                <option value = "">-----------Select Your School Year------- </option>
                <option value = "first year">First Year </option>                
                <option value = "second year">Second Year </option>
                <option value = "third year">Third Year </option>
                <option value = "fourth year">Fourth Year </option>
                <option value = "fifth year">Fifth Year </option>
            </select>

            <input type = "submit">

        </form>

    </body>
</html>
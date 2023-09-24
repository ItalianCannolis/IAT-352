<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Arrays</title>
  </head>
  <body>

    <?php
    // ----------------- START OF TASK 1 -----------------------//

    /*
      Task 1: initialize an array with 6 elements of your choice
              Print out one of the elements to make sure there are no errors
    */
      echo "<h2>Task 1: </h2>";
      $countries = array('Italy', 'Spain','Germany', 'Macedonia', 'India', 'Canada');
      echo $countries[4];

    // ----------------- END OF TASK 1 -----------------------//
    ?>



    <?php
    // ----------------- START OF TASK 2 -----------------------//

    /*
      Task 2: Use a for loop to print out all the elements in the array created in the previous task
    */
      echo "<h2>Task 2: </h2>";
      foreach ($countries as $count){
        echo $count." ";
      }

    // ----------------- END OF TASK 2 -----------------------//
    ?>



    <?php
    // ----------------- START OF TASK 3 -----------------------//

    /*
      Task 2: Sort the array in descending order
                check if a value of your choice exists in the array
                  print a message alerting the user if the value exists or not

              Joins all the elements of the array and print it out as a string. Make sure the array is sorted.
    */

  
      echo "<h2>Task 3: </h2>";

      sort($countries);
      for ($index = 0; $index < count($countries); $index++){
        //echo $countries[$index]." ";       

        if($countries[$index] == 'Mexico'){

          echo "Mexico is in the list of countries!";
          echo "<br></br>";
          echo implode(',',$countries);
          break;
        }
        else if($countries[$index] != 'Mexico' && $index == (count($countries)-1)){
          
          echo "Mexico is not in the list of countries!";
          echo "<br></br>";
          echo implode(', ',$countries);
        }
        
      }    

    // ----------------- END OF TASK 3 -----------------------//
    ?>



    <?php
    // ----------------- START OF TASK 4 -----------------------//

    /*
      Task 4: Create an associative array with the following:
                Name of an animal
                Food the animal eats
                Place where you can find the animal
              Insert an additional index called color with any value that you want
              Then print out a sentence explaining the animal with those attributes

    */
      echo "<h2>Task 4: </h2>";
      $animals = array("animal" => "bear","food" => "fish","home" => "cave");
      $animals['color'] = 'brown'; 


      echo "A ".$animals["color"]." ".$animals["animal"]." that eats ".$animals["food"]." lives in a ".$animals["home"];


    // ----------------- END OF TASK 4 -----------------------//
    ?>



    <?php
    // ----------------- START OF TASK 5 -----------------------//

    /*
      Task 5: Turn the array in task 4 into a CSV and insert the CSV into animal.txt as a new line
              Then display all the animal names in the CSV file (there are 2 to start with)

    */
      echo "<h2>Task 5: </h2>";
      $bear = implode(',',$animals);
      $duplicate = false;


      $file = fopen('animal.txt','r');

      /*
      while ($line = fgets($file)){
        echo "fgets method:".$line;
        echo "<br></br>";

      }
      */
      while ($lineCSV = fgetcsv($file)){
        if($lineCSV[0] == "bear"){
          $duplicate = true;
          break;
        }

      }
      fclose($file);

      if (!$duplicate){
        $file = fopen('animal.txt','a');
  
        fwrite($file, "\n".$bear);
        fclose($file);
      }

      $file = fopen('animal.txt','r');

      while ($lineCSV = fgetcsv($file)){

        echo "fgetcsv method:".$lineCSV[0]." ".$lineCSV[1]." ".$lineCSV[2]." ".$lineCSV[3];
        echo "<br></br>";

      }


      fclose($file);

    // ----------------- END OF TASK 5 -----------------------//
    ?>

  </body>
</html>
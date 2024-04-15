<?php 

    // php scripts start with <?php and end with ? >
    // run php server to display php script in the browser with
    // command php -S localhost:3000/name_of_repository, 

    // simple php script
    // end lines with semicolons
    echo "Hello World!";

    // variables
    // start with $
    // . works for concatenation of variables and strings, + only works when they can be converted into numbers for addition
    $name = "Alice";
    echo "Hello, " . $name;

    // arrays
    // to create an array, initialize with a variable and then use array() syntax, as a constructor.
    // can create both indexed arrays or associative arrays 
    
    // indexed arrays => keys are numeric and automatically assigned, starting from zero
    $colors = array("Red", "Green", "Blue");
    $colors_two = ["Red", "Green", "Blue"];

    echo $colors[0];
    echo $colors[1];
    echo $colors[2];

    echo $colors_two[2];

    // associative arrays => each key has a specific value assigned to it, it can be any string or integer similar to dictionaries or objects
    $user = array("name" => "Alice", "age" => 30);
    $user_two = ["name" => "Alice", "age" => 30];

    foreach ($colors as $color) {
        echo $color . " ";
    }
    
?>
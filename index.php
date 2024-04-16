<?php 

    // php scripts start with <?php and end with ? >
    // run php server to display php script in the browser with
    // command php -S localhost:3000/name_of_repository, 

    // simple php script
    // end lines with semicolons
    echo "Hello World!" . " <br>";

    // variables
    // start with $
    // . works for concatenation of variables and strings, + only works when they can be converted into numbers for addition
    $name = "Alice";
    echo "Hello, " . $name . " <br>";

    // arrays
    // to create an array, initialize with a variable and then use array() syntax, as a constructor.
    // can create both indexed arrays or associative arrays 
    
    // indexed arrays => keys are numeric and automatically assigned, starting from zero
    $colors = array("Red", "Green", "Blue");
    $colors_two = ["Red", "Green", "Blue"];

    echo $colors[0] . " <br>";
    echo $colors[1] . " <br>";
    echo $colors[2] . " <br>";

    echo $colors_two[2] . " <br>";

    // associative arrays => each key has a specific value assigned to it, it can be any string or integer similar to dictionaries or objects
    $user = array(
        "name" => "Alice", 
        "age" => 30,
        "email" => "alice@example.com"
    );

    $user_two = ["name" => "Alice", "age" => 30];

    $car = [
        "make" => "Toyota",
        "model" => "Corolla",
        "year" => 2021
    ];

    echo $car["make"] . " <br>";
    echo $car["model"] . " <br>";

    echo $user["name"] . " <br>";
    echo $user_two["age"] . " <br>";


    // multidimensional arrays
    // array of arrays
    $multi = [
        ["name" => "Tom", "age" => 22],
        ["name" => "Jerry", "age" => 30]
    ];

    // access and loop through multidimensional array
    foreach ($multi as $person) {
        echo $person["name"] . " is " .$person["age"] . " years old.<br>";
    }


    foreach ($colors as $color) {
        echo $color . " " . " <br>";
    }



    foreach ($car as $key => $value) {
        echo "$key: $value "  . " <br>";
    } 

    // looping through displaying keys and values 

    foreach ($user as $key => $value) {
        echo "$key: $value " . " <br>";
    }



    // control structures
    // if else elseif

    $score = 75;
    if ($score > 90) {
        echo "Excellent!<br>";
    } elseif ($score > 50) {
        echo "Good Job!<br>";
    } else {
        echo "Needs improvement.<br>";
    }

    // while loop
    $count = 1;
    while ($count <= 5) {
        echo "Count is: $count<br>";
        $count++;
    }

    // for loop
    for ($i = 0; $i < 3; $i++) {
        echo "Iteration $i<br>";
    }




    // functions

    function sayHello() {
        return "Hello, World!<br>";
    }
    
    echo sayHello();

    // function with parameters
    function greet($name) {
        return "Hello " . $name . "!" . " <br>";
    }

    echo greet("Bob") . " <br>";


    // function with default parameter values

    function greetPerson($name = "Guest") {
        return "Welcome, $name! <br>";
    }

    echo greetPerson();
    echo greetPerson("Bob");


    // function with multiple parameters

    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }

    echo addNumbers(5, 3) . "<br>";


    // return multiple values

    function getMinMax($numbers) {
        return [
            "min" => min($numbers),
            "max" => max($numbers)
        ];
    }

    $result = getMinMax([1, 2, 3, 4, 5]);
    echo "Min: " . $result["min"] . "<br> Max: " . $result["max"] . "<br>";

    // variable functions - store function in a variable

    function sayGoodbye() {
        return "Goodbye!<br>";
    }

    $func = "sayGoodbye";
    echo $func();

    // functions within functions

    function outer() {
        echo "Outside <br>";

        function inner() {
            echo "Inside<br>";
        }
        inner();
    }

    outer();

    // recursive function - calls itself to perform a task, like calculating a factorial
    function factorial($number) {
        if ($number <= 1) {
            return 1;
        } else {
            return $number * factorial($number- 1);
        }
    }

    echo factorial(5) . "<br>";

    // function calling another function/ higher order functions

    function multiply($x) {
        return function($y) use ($x) {
            return $x * $y;
        };
    }

    $double = multiply(2);
    echo $double(3) . " <br>";

    

    // utility function that can be used to sanitize input data for HTML output
    function sanitize($data) {
        return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    }
    $userInput = "<script>alert('hi');</script>";
    echo sanitize($userInput); 
    

?>
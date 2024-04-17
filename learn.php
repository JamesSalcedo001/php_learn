
<h1>This is HTML outside of php tags</h1>

<?php 

    // php scripts start with <?php and end with ? >

    // single line comment
    # single line comment

    /*
        multi

        line

        comment
    */


    // echo is used to output text to the web page


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


    // data types 

    # scalar types: int, float, string, bool

    # compound types: array, object

    # special types: resource, null



    $integer = 42;
    $float = 42.5;
    $string = "Hello this is James";
    $boolean = true;
    $array = [1, 2, 3, "four"];
    $null = NULL;
    echo $string . "<br>";


    // operators

    $x = 10;
    $y = 20;
    // assignment

    // arithmetic
    $sum = $x + $y;
    $difference = $y - $x;
    $product = $x * $y;
    $quotient = $y / $x;
    $remainder = $y % $x;

    $x += 5;
    // $y -= 5;

    // comparison
    $is_equal = ($x == 15); // true
    $is_identical = ($x === "15"); // false because they are different data types;

    // logical
    $is_valid = ($x < 20 && $y > 15); // true

    echo "Sum: $sum, Difference: $difference <br>";


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


    $age = 20;

    if ($age >= 18) {
        echo "You are an adult";
    } elseif ($age >= 13) {
        echo "You are a teenager";
    } else {
        echo "You are a child";
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

    // switch case
    $grade = "B";
    switch ($grade) {
        case "A":
            echo "Excellent! <br>";
            break;
        case "B":
            echo "Very Good! <br>";
            break;
        case "C":
            echo "Good! <br>";
            break;
        case "D":
            echo "Needs improvement <br>";
            break;
        case "F":
            echo "Fail <br>";
            break;
        default:
            echo "Invalid grade <br>";
    }


    $day = "Tue";

    switch($day) {
        case "Mon":
            echo "It is monday <br>";
            break;
        case "Tue":
            echo "It is tuesday <br>";
            break;
        case "Wed":
            echo "It is wednesday <br>";
            break;
        case "Thurs":
            echo "It is thursday <br>";
            break;
        case "Fri":
            echo "It is friday <br>";
            break;
        case "Sat":
        case "Sun":
            echo "It is the weekend! <br>";
            break;
        default:
            echo "not a valid day <br>";
            
    }

    // group saturday and sunday together


    // do while loop
    
    $count = 6;

    do {
        echo "Count is $count <br>";
        $count++;
    } while ($count <= 5);

    // executes once even though the condition is false from the start, guaruntees block will always at least run once

    
    // foreach
    $cats = ["Tomo", "Binx", "Dhalia"];

    foreach ($cats as $cat) {
        echo "Cat is named: $cat <br>";
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


    // return multiple values

    function calculate($num1, $num2) {
        $sum = $num1 + $num2;
        $product = $num1 * $num2;
        return ["sum" => $sum, "product" => $product];
    }

    $result = calculate(5, 3);
    echo "Sum: " . $result["sum"] . ", Product: " . $result["product"] . "<br>";

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
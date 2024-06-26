
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





    // string functions


    // strlen

    $text1 = "Hello, World!";
    echo "length of hello, world! ", strlen($text1);
    echo "<br>";


    // str_replace

    $text2 = "Hello, World!";
    $replacedText = str_replace("World", "PHP", $text2);
    echo $replacedText . "<br>";


    // strpos

    $text3 = "Hello, World!";
    $pos = strpos($text3, "World");
    if ($pos !== false) {
        echo "The string 'world' starts at position: $pos" . "<br>";
    } else {
        echo "The string 'world' was not found.";
    };



    // strtoupper and strtolower

    $text4 = "Hello, World!";
    echo strtoupper($text4);
    echo "<br>";

    echo strtolower($text4);
    echo "<br>";

    

    // substr

    $text5 = "Hello, World!";
    echo substr($text5, 7, 5);
    echo "<br>";


    // str_pad

    $text6 = "Hello";
    $paddedText = str_pad($text6, 10, ".");
    echo $paddedText;
    echo "<br>";


    // explode

    $data = "apple,orange,banana";
    $fruits = explode(",", $data);
    echo "splitting a string by , and converting to an array: <br>";
    print_r($fruits);
    echo "<br>";


    // implode

    $fruitString = implode(" | ", $fruits);
    echo "joining an array by | and converting to a string: <br>";
    echo $fruitString;
    echo "<br>";


    // trim

    $text7 = "     Hello, World!  ";
    $trimmedText = trim($text7);
    echo "Start" . $trimmedText . "End";
    echo "<br>";


    // str_repeat
    echo str_repeat("Hi!", 3);
    echo "<br>";










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


    // array functions

    // count 
    $colors = ["Red", "Blue", "Green"];
    echo count($colors) . "<br>";

    // sort
    $colors = ["Red", "Green", "Blue"];
    sort($colors);
    print_r($colors);
    echo "<br>";



    // array_merge

    $array1 = ["Red", "Blue"];
    $array2 = ["Green", "Yellow"];

    $result = array_merge($array1, $array2);

    print_r($result);
    echo "<br>";



    // array_push

    $colors = ["Red", "Green"];
    array_push($colors, "Blue", "Yellow");
    print_r($colors);
    echo "<br>";



    // array_map

    $numbers = [1, 2, 3, 4, 5];

    $squared = array_map(function($num) { return $num * $num; }, $numbers );

    print_r($squared);
    echo "<br>";



    // array_slice

    $fruits = ["Apple", "Banana", "Cherry", "Date", "Elderberry"];

    $sliced = array_slice($fruits, 1, 3);
    print_r($sliced);
    echo "<br>";


    // array_splice

    $input = ["Red", "Green", "Blue", "Yellow"];
    array_splice($input, 2, 1, "Orange");
    print_r($input);
    echo "<br>";


    // array_filter

    $numbers = [1, 2, 3, 4, 5];
    $even = array_filter($numbers, function($num) {
        return $num % 2 == 0;
    });
    print_r($even);
    echo "<br>";


    // array_reduce

    $numbers = [1, 2, 3, 4];
    $sum = array_reduce($numbers, function($carry, $item) {
        return $carry + $item;
    }, 0);
    echo "<br> sum of reduced numbers: ", $sum;

    
    // array_keys

    $age = ["Peter" => 41, "Jane" => 34, "John" => 47];
    $keys = array_keys($age);
    print_r($keys);
    echo "<br>";

    // array_values

    $age = ["Peter" => 41, "Jane" => 34, "John" => 47];
    $values = array_values($age);
    print_r($values);
    echo "<br>";


    // array_unique

    $dupes = ["apple", "banana", "apple", "banana", "orange", "berry"];

    $unique = array_unique($dupes);
    print_r($unique);
    echo "<br>";


    // array_reverse

    $nums = [1, 2, 3, 4, 5];

    $reversed = array_reverse($nums);
    print_r($reversed);
    echo "<br>";


    // array_diff

    $array1 = ["a", "b", "c", "d"];
    $array2 = ["a", "b", "e", "f"];
    $difference = array_diff($array1, $array2);
    print_r($difference);
    echo "<br>";


    // array_intersect

    $array1 = ["a", "b", "c", "d"];
    $array2 = ["a", "b", "e", "f"];
    $intersection = array_intersect($array1, $array2);
    print_r($intersection);
    echo "<br>";


    // array_multisort

    $ages = [4, 3, 5];
    $names = ["Tomo", "Binx", "Dhalia"];

    array_multisort($ages, $names);
    print_r($names);
    echo "<br>";
    print_r($ages);
    echo "<br>";


    // example two

    $people_names = ["alice", "bob", "cynthia"];
    $scores = [88, 95, 82];
    $cities = ["new york", "los angeles", "chicago"];


    array_multisort($scores, $people_names, $cities);

    echo "Sorted names: ";
    print_r($people_names);
    echo "<br>";


    echo "Sorted scores: ";
    print_r($scores);
    echo "<br>";


    echo "Sorted cities: ";
    print_r($cities);
    echo "<br>";




    // array_push

    $stack = ["orange", "banana"];
    array_push($stack, "apple", "raspberry");
    print_r($stack);
    echo "<br>";


    // array_pop

    $stack = ["orange", "banana"];
    $item = array_pop($stack);
    echo $item . "<br>";
    print_r($stack);
    echo "<br>";


    // array_shift

    $queue = ["orange", "apple", "banana", "raspberry"];
    $removed = array_shift($queue);
    echo "removed item: " . $removed . "<br>";
    print_r($queue);
    echo "<br>";


    // array_unshift

    array_unshift($queue, "mango", "pineapple");
    print_r($queue);
    echo "<br>";


    // array_combine

    $keys = ["foo", "bar", "baz"];
    $values = [1, 2, 3];

    $combined = array_combine($keys, $values);
    print_r($combined);
    echo "<br>";







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
        echo "You are an adult . <br>";
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


    // match only works with later versions of PHP, 8.0 and later

    // $bool = true;
    // $a = "1";
    // $b = 4;

    // $result_02 = match ($a) {
    //     1, 3, 5 => "Variable a is equal to one",
    //     2 => "Variable b is equal to two",
    //     default => "none were a match",
    // };

    // echo $result;

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




    // dates



    // time 

    $current_time = time();
    echo $current_time;
    echo "<br>";


    // date


    echo "current date: " . date("Y-m-d");
    echo "<br>";

    echo "day of week: " . date("l");
    echo "<br>";


    // timestamp

    $timestamp = time();
    echo "timestamp: " . date("F j, Y, g:i a", $timestamp);
    echo "<br>";

    // formatting options

    /* 
    
        Y - four digit rep of year
        m - numeric repr of a month with leading zeroes (01 - 12)
        d - day of month with leading zeroes (01 - 31)
        l - full textual rep of day of week
        H - 24hr format of an hour with leading zeroes (00 - 23)
        i - minutes with leading zeroes(00 - 59)
        s - seconds "" "" "" (00 - 59)
        a - ante meridiem or post meridiem (am or pm)

    */


    // strtotime

    $str_to_time = strtotime("next Monday");
    echo "next monday from today's date: " . date("Y-m-d", $str_to_time);
    echo "<br>";


    // adding or subtracting time

    // add 10 days to current date

    $date_in_10_days = strtotime("+10 days");
    echo "date in ten days: " . date("Y-m-d", $date_in_10_days);
    echo "<br>";


    // subtracting days

    $date_last_month = strtotime("-1 month");
    echo "date last month: " . date("Y-m-d", $date_last_month);
    echo "<br>";


    // datetime class OOP approach

    $date = new DateTime();
    $date->modify(("+1 week"));
    echo $date->format("Y-m-d");
    echo "<br>";


    // specific date

    $specificDate = new DateTime("2024-03-10");
    $specificDate->add(new DateInterval("P10D"));
    echo $specificDate->format("Y-m-d");









?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: <?php echo date("H") > 18 ? "#000" : "#FFF" ?>;
            color: <?php echo date("H") > 18 ? "#FFF" : "#000"; ?>
        }
    </style>
    <title>User Greeting</title>
</head>
<body>
   <?php 
   $hour = date("H") // 24hr date format
   ?>

   <h1>Welcome to our website!</h1>
   <p>
    <?php 
    if ($hour < 12) {
        echo "Good Morning!" . "It is currently hour: $hour";
    } elseif ($hour < 17) {
        echo "Good Afternoon!" . "It is currently hour: $hour";
    } else {
        echo "Good Evening!" . "It is currently hour: $hour";
    }
    ?>
   </p>

   <p>The background and color change depending on the time of day</p>
    
</body>
</html>
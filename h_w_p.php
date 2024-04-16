<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Greeting</title>
</head>
<body style="background-color: <?php include 'index.php'; echo $backgroundColor; ?>; color: <?php echo $textColor; ?>;">
    <h1><?php echo $greeting; ?></h1>
    <p><?php echo $timeSpecificGreeting; ?></p>
    <p>Background and text color change depending on time of day</p>
    
</body>
</html>
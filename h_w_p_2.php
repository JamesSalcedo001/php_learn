<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="submit.php" method="POST">
        <label for="firstname">FirstName: </label>
        <input id="firstname" type="text" name="firstname" placeholder="First name...">

        <label for="lastname">LastName: </label>
        <input id="lastname" type="text" name="lastname" placeholder="Last name...">

        <label for="favoritepet">Favorite Pet?</label>
        <select id="favoritepet" name="favoritepet">
            <option value="None">None</option>
            <option value="Cat">Cat</option>
            <option value="Dog">Dog</option>
            <option value="Reptile">Reptile</option>
        </select>

        <button type="submit">Submit</button>
    </form>
    
</body>
</html>
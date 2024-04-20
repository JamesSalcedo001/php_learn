<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);   
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favoritepet = htmlspecialchars($_POST["favoritepet"]);

    if (empty($firstname)) {
        header("Location: h_w_p_2.php");
        exit();
    }


    header("Location: h_w_p_2.php");
} else {
    header("Location: h_w_p_2.php");
}
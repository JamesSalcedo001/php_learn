<?php 
$hour = date("H");
$backgroundColor = $hour > 18 ? "#000" : "#FFF";
$textColor = $hour > 18 ? "#FFF" : "#000";
$greeting = "Welcome to our website!";
$timeSpecificGreeting = "It is currently: $hour";

if ($hour < 12) {
    $timeSpecificGreeting = "Good Morning! " . $timeSpecificGreeting;
} elseif ($hour < 17) {
    $timeSpecificGreeting = "Good Afternoon! " . $timeSpecificGreeting;
} else {
    $timeSpecificGreeting = "Good Evening! " . $timeSpecificGreeting;
}
?>
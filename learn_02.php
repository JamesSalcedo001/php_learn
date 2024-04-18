<?php


// creating a file

$filename = "newfile.txt";
$file = fopen($filename, "w");

if ($file == false) {
    echo "Error opening new file";
    exit();
};


$text = "Hello this is a test file.\n";
fwrite($file, $text);

$text = "Adding more text to the test file.\n";
fwrite($file, $text);

fclose($file);
echo "file created and data written successfully.";




?>
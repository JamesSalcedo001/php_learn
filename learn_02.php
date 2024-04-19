<?php


// creating a file

// $filename = "newfile_02.txt";

// // handling case where file name exists already
// if (file_exists($filename)) {
//     echo "The file $filename already exists!";
// } else {
//     $file = fopen($filename, "w"); // open for writing only

//     if ($file === false) {
//         echo "Error in opening new file";
//         exit();
//     }

//     $text = "Hello, this file was just created\n";

//     fwrite($file, $text);

//     chmod($filename, 0644);

//     fclose($file);

//     echo "File created, file permissions set, and initial data written";
// }


$filename = "newfile_03.txt";

if (file_exists($filename))




?>
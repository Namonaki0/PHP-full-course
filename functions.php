<?php

// function hypotenuse(float $a, float $b)
// {
//     $c = sqrt($a ** 2 + $b ** 2);
//     return $c;
// }

// echo hypotenuse(3, 4);

//? string functions
$username = "Andy Glover";
$phone = "123-456-789";
$namearray = ["Andy", "Glover"];

// $username = strtolower($username);  // andy glover
// $username = strtoupper($username);  // ANDY GLOVER
// $username = str_pad($username, 20, "/");  // Andy Glover/////////
// $username = trim($username);  // removes white space before and after string
// $username = strrev($username);  // revolG ydnA
// $username = str_shuffle($username); // dGeyvlAor n
// $equals = strcmp($username, "Andy Glover"); // if stirngs are equal it returns 0 and -1 if not
// $phone = str_replace("-", "", $phone);  // 123456789
// $count = strlen($phone);  // 11
// $index = strpos($phone, "-");   // 3
// $firstname = substr($username, 0, 4);   // Andy
// $lastname = substr($username, 4);   // Glover
$username = implode("-", $namearray);   // Andy-Glover


// $username = explode(" ", $username);  // ["Andy", "Glover"]

// foreach ($username as $name) {
//     echo $name . "<br>";
// }

echo $username;
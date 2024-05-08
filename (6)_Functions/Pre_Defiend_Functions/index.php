<?php

//  String Function...............
echo(" String Function....................... <br>");

$name = "satyajay dibya";
echo($name)."<br>";

echo strlen($name)."<br>";
echo str_replace("a","@", $name)."<br>"; // case sensitive
// echo str_replace("a","A", $name); // no case sensitive

echo ucwords($name).'<br>'; //Capitalizes the first letter
echo strtoupper($name)."<br>";
echo strtolower($name)."<br><br>";

// Number Function...................
echo("Number Function....................... <br>");

$num = 20;
$num2 = 100.22;
var_dump(is_int($num)); //chack int dataType
var_dump(is_string($num2)); //chack string dataType
var_dump(is_bool($num)); //chack bool dataType
var_dump(is_numeric($num)); //chack Number dataType
echo"<br><br>";
// etc..

// Math Function...................
echo("Number Function....................... <br>");

echo pi()."<br>"; // pi value
echo abs(-44)."<br>"; // value conver negative to positive
echo sqrt(100)."<br>"; // value return square root
echo round(9.6)."<br>";  // return round off value
echo rand()."<br>"; // return random number
echo rand(1,9); // return random number

?>

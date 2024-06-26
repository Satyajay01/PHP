<!-- An array stores multiple values in one single variable: -->

<?php
//Create Arrays---------
$myArray = [1, 2, 3, "satyajay", "dibya", "DOB" => 2001];
// $myArray = array (1,2,3, "satyajay", "dibya");  You can create an array using the array() function:

//Access Arrays------------
echo $myArray[2] . "<br>";
echo $myArray[3] . " " . $myArray[4];
echo $myArray["DOB"];
echo "<br><br>";

foreach ($myArray as $element) {
    echo $element . " ";
}

echo "<br><br>";
//Update Arrays-------------

$myCar = ["Volvo", "BMW", "Toyota", "Year" => 2023];

$myCar[2] = "Rolls Royce";
$myCar["Year"] = 2024;

echo $myCar[2] . "<br>";
echo $myCar["Year"];

// -------------------
echo "<br>";
$number = [2, 3, 4, 5];
foreach ($number as &$i) {
    $i *= 2;
}

echo $number[2];

echo "<br><br>";
//Add Array Item ---------------

$fruits = ["Apple" => 123, "Banana", "Cherry"];
$fruits[] = "Orange";
$fruits["Apple"] = 456;

foreach ($fruits as $element) {
    echo $element . " ";
}

echo "<br><br>";
//Remove Array Items---------------
$cars2 = array("Volvo", "BMW", "Toyota");
array_splice($cars2, 1, 2); //splice

foreach ($cars2 as $element) {
    echo $element . " ";
}


echo "<br><br>";
// Sort Arrays------------------

$mynumber = [2, 4, 1, 5, 3, 6];
sort($mynumber);

foreach ($mynumber as $element) {
    echo $element . " ";
}

// All Sort Arrays methods 
// https://www.w3schools.com/php/php_arrays_sort.asp



echo "<br><br>";
// Associative Array-----------------------

$employees = array(
    "Satyajay" => "Software Engineer",
    "Abhi" => "Web Developer",
    "Ravi" => "App Developer",
);

$employees_key = array_keys($employees);
print_r($employees_key);
echo "<br>";

$employees_value = array_keys($employees);
print_r($employees_value);
echo "<br>";

$myemployees = array_reverse($employees);
print_r($myemployees);
echo "<br>";


foreach ($employees as $key => $value) {
    echo "<br>";
    echo $key . " ";
    echo $value . " ";
}




echo "<br><br>";
// Multidimensional Array------------

$students = array(
    array("Name" => "Satyajay", "Class" => "BCA"),
    array("Name" => "jay", "Class" => "MCA")
);

foreach ($students as $key => $value) {

    foreach ($value as $k => $v) {
        echo "<b> $k </b> : ".$v ."<br>"; 
    }
}




?>
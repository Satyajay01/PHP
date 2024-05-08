<?php
// (1)Regular Functions-------------
function SumofTowNumber($a,$b) {
    return $a+$b;
  }
  echo SumofTowNumber(5,2)."<br>";

  // (2)Arrow Functions------------
  $ArrowFunction =fn($name)=> "hello $name Arrow Function";
  echo $ArrowFunction("satyajay")."<br>";

// (3)Anonymous Functions (Closures)-----------
$greet = function($name) {
    return "Hello $name";
};
echo $greet('Satyajay')."<br>"; 


// (4)Variable Functions------------
function functionName() {
    echo "Satyajay";
}
$functionName = "functionName";
$functionName(); // Output: Satyajay


?>
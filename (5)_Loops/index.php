<!-- Loops:- Repeats a block of code until a specific condition is met. It automates repetitive tasks by executing the code multiple times. -->


<?php
// For Loop
echo"For Loop <br>";
for ($i=1; $i < 10; $i++) { 
    echo($i);
}

echo"<br><br>";


// While Loop
echo"while Loop <br>";
$i = 1;
while ($i < 10) {
  echo $i;
  $i++;
}
echo"<br><br>";


// Do-while Loop
echo"Do-while Loop <br>";

$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 10);

echo"<br><br>";


//foreach Loop  (use for array)
echo"foreach Loop <br>";

$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $i) {
  echo "$i <br>";
}

?>
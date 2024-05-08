<!-- IF ELSE condition is used to identify whether the condition is true or false. -->


<?php

//if-else conditions
$a = 10;
$b = 10;


if ($a == $b) {

    echo "A is equal to B";
} else {
    echo "A is not equal to B";
}

echo"<br><br>";
// nested if-else conditions
$c = 10;
$d = 20;

if ($c == $d) {
    echo "Nested : ". "A is equal to B <br>";
} else {
    echo "Nested : "."A is not equal to B. <br>";

    if ($c > $d) {
        echo "Nested : "."But A is greater than B. <br>";
    } else {
        echo "Nested : "."And A is less than B. <br>";
    }
}

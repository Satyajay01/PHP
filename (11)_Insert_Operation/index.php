<?php

// <!-- insert Operation -->

/*((require and include) To call the database connection file) */


include('config/DB_conection.php'); //  require('config/DB_conection.php');

$date = date("Y-m-d H:I:S"); // Date() function to use current date and time
// data insert Query
$sql = "INSERT INTO users (username, password, date) VALUES ('satyajay', 'Saty12345','$date')";  //id auto increment in a database



$result = $conn->query($sql);
if ($result == true) {
    echo "New Record Created...!";
} else {
    echo "New Record Not Created. Error: ". $conn->error;

}

?>

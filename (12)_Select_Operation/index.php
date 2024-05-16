<!-- Select Operation -->

<?php

// calling database conection file
include('config/DB_conection.php');


//$sql = "SELECT * FROM users "; // all data with password

// $sql = "SELECT id, username, date FROM users"; // All user data none password

$sql = "SELECT id, username, date FROM users WHERE id=1 "; // data from only one specific user



$result = $conn -> query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo"<pre>";
        print_r($row);
    }
}




?>

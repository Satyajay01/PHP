
<!--Mysql database Connection with Procedural approach connection -->

<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "mydatabase";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbName);

        // check connection (error checking function:-  mysqli_connect_error())
        if( $conn){
            echo "Connection Successful...!";
        }
        else{
            echo "connection failed ". mysqli_connect_error();
        }
        

?>
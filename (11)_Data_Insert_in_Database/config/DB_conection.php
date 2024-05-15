<!--Mysql database Connection with object oriented approach -->


<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "mydatabase";

        // Create connection
        $conn = @new mysqli($servername, $username, $password, $dbName);

        // check connection ( $conn->connect_error)
        
        if( $conn->connect_error){
            echo "connection failed ". $conn->connect_error;
        }
    
  

?>
<!-- Middleware:- Middleware checks whether the request is valid or not between two HTTP requests. -->

<?php

    if(isset($_SESSION['is_user_loggedin']))
        {
            return true;
        }
    else{
        header("LOCATION: index.php");
    }

?>
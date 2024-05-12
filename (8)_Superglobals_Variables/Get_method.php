<?php
// form data access

/* print_r($_GET);
echo "<br>";
echo "<br>";
echo $_GET["username"];
echo "<br>";
echo $_GET["password"];
echo "<br>"; */


//Undefined array error handle---------

// echo "<pre>";
// print_r($_GET);
// exit;

if (isset($_GET['submit'])) {

    if (empty($_GET['username'])) {
        echo "User name is Empty";
    } else if (empty($_GET['password'])){
        echo "password is not Empty";
    }
    else{
        echo"All good!";

    }

    echo "<br><br>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Get_method.php" method="get">

        <div>
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <br>
        <div>
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <br>
        <div>
            <button type="submit" name="submit"> Log in</button>
        </div>

    </form>


</body>

</html>
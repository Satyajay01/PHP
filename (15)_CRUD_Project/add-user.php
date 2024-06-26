<?php

include("config/database.php");
include("middleware.php"); // To do page restriction, it has to be included in all pages.

$_SESSION['name']= "hello world"; // $_SESSION is a globale variable, $_SESSION can be used in all pages ( like users.php page) by creating a variable.

if(isset($_POST['submit'])){ // submit button name

    extract($_POST); // extract is a super global variable (So that there is no need to create separate variables for everyone.)

    $date =date("Y-m-d H:i:s"); // for the current date
    $pass = md5($password); // md5 (Password Encryption)
    $sql = "INSERT INTO users(username, password, date) VAlUES ('$username', '$pass', '$date')";

   $result = $conn->query($sql);
   if ($result) {

    $_SESSION['success']="<h1>User has been Created</h1>";
   }
   else{

    $_SESSION['error']="<h1>Something went wrong, please try again</h1>?";
   }

   header("LOCATION: users.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet">
    <title>PHP CRUD Application</title>
</head>

<body>
    <section class="section">
        <h2>Register Form</h2>

        <form action="add-user.php" method="post">
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit" name="submit">Signup</button>
            </div>
        </form>

        <div class="container" style="background-color:#f1f1f1">
            <a href="users.php" class="footerbtn">All Users</a>

            <a href="logout.php" class="footerbtn">Logout</a>

        </div>
    </section>

</body>

</html>

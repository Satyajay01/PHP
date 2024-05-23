<?php

include("config/database.php");

if(isset($_POST['submit'])){ // login form submit
    extract($_POST); // extract is a super global variable (So that there is no need to create separate variables for everyone.)

    // sql query to login
    $sql="SELECT * FROM users WHERE username ='$username' AND password='$password' ";
    $result=$conn->query($sql);
    if ($result->num_rows) {
        $_SESSION['is_user_loggedin']=true;
        $_SESSION['is_user_data']=mysqli_fetch_assoc(($result));
        header("LOCATION: users.php");
    }
    else{
    $_SESSION['error']="<h1>Invalid login info</h1>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet">
    <title>PHP CRUD Application</title>
</head>

<body>

    <section class="section">
    <?php include("include/alert.php"); ?>
        <h2>Login Form</h2>

        <form action="index.php" method="post">
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit" name="submit">Login</button>

            </div>
        </form>
    </section>

</body>

</html>
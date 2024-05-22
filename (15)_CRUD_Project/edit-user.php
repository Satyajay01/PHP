<?php

include("config/database.php");

// step 1 to gate Edited user data
if(isset($_GET['id'])){

     $sql = "SELECT * FROM users WHERE id= ".$_GET['id'];
     $result= $conn->query($sql);

    $edited_user = mysqli_fetch_assoc($result); //mysqli_fetch_assoc stores data in a new variable
    // echo "<pre>";
    // print_r($edited_user);
    // exit;
}
else{

    echo "Invalid Request";
    exit;
}

// step 2 
if(isset($_POST['submit'])){ // submit button name

    extract($_POST); // extract is a super global variable (So that there is no need to create separate variables for everyone.)

//    echo $sql = "UPDATE users SET username='$username', password='$password' WHERE id=".$_GET['id'];
    $sql = "UPDATE users SET username='$username', password='$password' WHERE id=".$_GET['id'];

   $result = $conn->query($sql);
   if ($result) {

    $_SESSION['success']="<h1>User has been Updated</h1>";
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
        <h2>Edit User</h2>

            <form action="edit-user.php?id=<?php echo $_GET['id'] ?>" method="post">   <!-- Invalid Request error handling -->
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required value="<?php echo $edited_user['username'] ?>">

                <label for="psw"><b>Password</b></label>
                <input type="text" placeholder="Enter Password" name="password" required value="<?php echo $edited_user['password'] ?>">

                <button type="submit" name="submit">Update</button>
            </div>
        </form>

        <div class="container" style="background-color:#f1f1f1">
            <a href="users.php" class="footerbtn">All Users</a>

            <a href="logout.php" class="footerbtn">Logout</a>

        </div>
    </section>

</body>

</html>
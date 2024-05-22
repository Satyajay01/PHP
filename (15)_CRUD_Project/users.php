<?php
include("config/database.php");

// delete user data
if (isset($_GET['id'])) {
    extract($_GET);
    $sql= "DELETE FROM users WHERE id=".$id;
    $result= $conn->query($sql);
    if ($result) {
    echo "<h1>User has been deleted </h1>";
    }
    else{
        echo"</h1>Something went wrong, please try again</h1>";
    }
}

// show all Users
$sql = "SELECT * FROM users";
$result = $conn->query($sql);




// echo $_SESSION['name']; 
echo $_SESSION['success']; 
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
        <h2>All Users</h2>

        <table id="users">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($result->num_rows > 0){

                
                while($row=mysqli_fetch_assoc($result))
                {
                ?>
                <tr>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo date("d-m-y H:i A",strtotime($row['date'])); ?></td>
                    <td>
                    <a href="edit-user.php?id=<?php echo $row['id']; ?>" class="button edit">Edit</a>   <!--  get user's data ,by user id for user datal Edit  -->
                    <a href="users.php?id=<?php echo $row['id']; ?>" class="button delete">Delete</a>
                    </td>
                </tr>
                <?php }
            
            } else{
                echo"<tr><td colspan='3'>No Record Found ! </td></tr>";
            }
            ?>
            </tbody>
        </table>

        <div class="container" style="background-color:#f1f1f1">
            <a href="add-user.php" class="footerbtn">Add User</a>
        </div>
    </section>

</body>

</html>

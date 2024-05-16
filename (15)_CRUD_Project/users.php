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
                <tr>
                    <td>Satyajay</td>
                    <td>5/16/2024, 09:28 pm</td>
                    <td>
                        <a href="#" class="button edit">Edit</a>
                        <a href="#" class="button delete">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>Satya</td>
                    <td>5/17/2024, 10:28 pm</td>
                    <td>
                        <a href="#" class="button edit">Edit</a>
                        <a href="#" class="button delete">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>Satyajay</td>
                    <td>5/18/2024, 11:28 pm</td>
                    <td>
                        <a href="#" class="button edit">Edit</a>
                        <a href="#" class="button delete">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="container" style="background-color:#f1f1f1">
            <a href="add-user.php" class="footerbtn">Add User</a>
        </div>
    </section>

</body>

</html>
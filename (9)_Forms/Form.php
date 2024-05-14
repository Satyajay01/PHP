<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <form action="Form.php" method="post">
        Name : <input type="text" name="name"> <br><br>
        Email : <input type="email" name="email"> <br><br>
        Password : <input type="password" name="password"><br><br>

        <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>


<?php
echo "<pre>";
print_r($_POST);

?>
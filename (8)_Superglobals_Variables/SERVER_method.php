<?php

// $_REQUEST can be used with both Get and Post methods.

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

?>



<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<form action="REQUEST_method.php" method="post">     <!--  method="get"  -->
        <input type="text" name="name" id="" placeholder="Enter your name"> <br><br>
        <input type="email" name="email" id="" placeholder="Enter your Email"><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
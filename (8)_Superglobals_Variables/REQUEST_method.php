<?php



echo "<pre>";
     print_r($_REQUEST);
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
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <form action="Radio_buttons.php" method="post">
        <label>Select any Course</label> <br>
        <input type="radio" value="BCA" name="Course">BCA <br>
        <input type="radio" value="MCA" name="Course">MCA<br>
        <input type="radio" value="BTech" name="Course">Btech<br>

        <button type="submit" name="submit" value="submit">submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {

        // for the error Handling-----
        $Course = null;
        if (isset($_POST['Course'])) {
            $Course = $_POST['Course'];
        }
        // for the error Handling------

        //   connections-------------
        if ($Course == 'BCA')
            echo "you selected the " . $Course;
        else if ($Course == 'MCA')
            echo "you selected the " . $Course;
        else if ($Course == 'BTech')
            echo "you selected the " . $Course;
        else {
            echo "please select the any Course";
        }
    }

    ?>



</body>

</html>
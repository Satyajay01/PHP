<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <form action="Checkbox_buttons.php" method="post">
        <label>Select any Course</label> <br>
        <input type="checkbox" value="Fastfood" name="foods[]">Fastfood <br>
        <input type="checkbox" value="Sweets" name="foods[]">Sweets<br>
        <input type="checkbox" value="Namkeen" name="foods[]">Namkeen<br>
        <input type="checkbox" value="Street Food" name="foods[]">Street Food<br>

        <button type="submit" name="confirm" value="Confirm">Confirm</button>
    </form>

    <?php
    if (isset($_POST['confirm'])) {
        // echo "<pre>";
        // print_r($_POST);

        $selected_foods = $_POST['foods'];
        foreach($selected_foods as $index){
            echo "you have selected: ".$index."<br>";
        }
    }
    ?>



</body>

</html>
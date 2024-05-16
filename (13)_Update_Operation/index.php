<!-- Update Operation -->

<?php

// calling database conection file
include('config/DB_conection.php');


// $sql = " UPDATE users SET username='Jay' "; // Update for all users data

$sql = "UPDATE users SET username='Satyajay' WHERE id=1 "; // data Update from only one specific user


$result =$conn->query($sql);

if ($result) {
   echo"Update Successfully";
}
else echo "Not Updated"

?>

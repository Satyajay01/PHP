<!-- DELETE Operation -->

<?php

// calling database conection file
include('config/DB_conection.php');


// $sql = " DELETE FROM users "; // DELETE for all users data Record (dont run this line code )

$sql = " DELETE FROM users  WHERE id=27 "; // Data Record DELETE from only one specific user


$result = $conn->query($sql);

if ($result) {
   echo " Data Record Delete Successfully...!";
} else echo "Date Record Not Deleted...!"

?>
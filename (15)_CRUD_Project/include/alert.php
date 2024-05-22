<?php
if(isset($_SESSION['success']))
{
    echo $_SESSION['success']; 
    unset($_SESSION['success']); //Message automatically disappears on page reload
}


if(isset($_SESSION['error']))
{
    echo $_SESSION['error']; 
    unset($_SESSION['error']); //Message automatically disappears on page reload
}


?>
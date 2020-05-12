<?php
$connection = mysqli_connect('localhost', 'root', 'U6dvtx40FrvG', 'inventory');

if (!$connection){
    die("Database Connection Failed" . mysqli_error());
}
?>
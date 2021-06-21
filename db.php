<?php
$connection = mysqli_connect('localhost', 'root', '', 'php');

if(!$connection){
    die ("Database connection is failed.".mysqli_error());
}

?>
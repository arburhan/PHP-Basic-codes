<?php
$serverName = 'localhost';
$userName = 'root';
$userPassword = '';

$dbSQL = 'create database finaldb';

$connection = mysqli_connect($serverName, $userName, $userPassword);
if(!$connection){
    die('connection failed'. mysqli_connect_error());
}
else{
    if(mysqli_query($connection, $dbSQL)){
        echo 'successfully database created';
    }
    else{
        echo 'error: '.mysqli_error($connection);
    }
}


?>
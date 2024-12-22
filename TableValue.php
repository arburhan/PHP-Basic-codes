<?php
$serverName = 'localhost';
$userName = 'root';
$userPassword = '';
$dbName = 'finaldb'; // its created on dbcreation.php file

$connection = mysqli_connect($serverName, $userName, $userPassword, $dbName);
$valueAdd = "insert into studentInfo values(161, 'tom', 'cse', 2022),(162, 'shahajadi', 'eee', 2022);";

if(!$connection){
    die('connection failed'. mysqli_connect_error());
}
else{
    if(mysqli_query($connection, $valueAdd)){
        echo 'value added on table successfully';
    }
    else{
        echo 'Error: ' . mysqli_error($connection);
    }
    
}





?>
<?php
$serverName = 'localhost';
$username = 'root';
$userPassword = '';
$dbName = 'finaldb'; // its created on dbcreation.php file

$connection = mysqli_connect($serverName, $username, $userPassword, $dbName);
$tableSQL = 'create table studentInfo(ID int, name varchar(300), dept varchar(50), session int)';
if(!$connection){
    die('connection failed'. mysqli_connect_error());
}
else{
    if(mysqli_query($connection, $tableSQL)){
        echo 'table created successfully';
    }
    else{
        echo 'error: '. mysqli_error($connection);
    }

}




?>
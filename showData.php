<?php
$serverName = 'localhost';
$userName = 'root';
$userPassword = '';
$dbName = 'finaldb'; // its created on dbcreation.php file

$connection = mysqli_connect($serverName, $userName, $userPassword, $dbName);
$query = 'SELECT * FROM studentInfo;';
if(!$connection){
    die("Connection failed: " . mysqli_connect_error());
} else {
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result)>0){
        echo 'Successfully retrieved data from the database:<br>';
        while($row = mysqli_fetch_assoc($result)){
            echo 'ID: ' . $row['ID'] . ' - Name: ' . $row['name'] . ' - dept: ' . $row['dept'] . '<br>';
        }
    } else {
        echo 'Error: ' . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
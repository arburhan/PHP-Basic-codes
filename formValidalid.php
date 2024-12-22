<?php
$nameErr  = "";
$emailErr  = "";
$genderErr  = "";
$passErr  = "";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $password = $_POST['password'];

    if(empty($name)){
        $nameErr = "Name is required";
    }
    if(empty($email)){
        $emailErr = "email is required";
    }
    if(empty($gender)){
        $genderErr = "gender is required";
    }
    if(empty($password)){
        $passErr = "password is required";
    }
    if(strlen($password)<8){
        $passErr = "password must be greater than 8 digit";
    }
}

?>


<form action="" method="post">
<label for="name">Name</label>
<input type="text" name="name">
<?php  echo " <font color='red'>$nameErr</font>"     ?>
<br>
<br>
<label for="email">Email</label>
<input type="email" name="email">
<?php  echo " <font color='red'>$emailErr</font>"     ?>
<br>
<br>
<label for="gender">Gender</label>
<input type="radio" name="gender">Male
<input type="radio" name="gender">Female
<?php  echo " <font color='red'>$genderErr</font>"     ?>
<br>
<br>
<label for="password">Password</label>
<input type="password" name="password">
<?php  echo " <font color='red'>$passErr</font>"     ?>
<br>
<br>
<input type="submit" name="submit">

</form>
<?php
session_start();


session_destroy();
echo 'logout successfully';
// echo $_SESSION['name']; এভাবে আর সেশন ডাটা দেখা যাবে না । এররর দেখাবে । কারন session destroy হয়ে গেছে । 

?>
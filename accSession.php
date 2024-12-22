<?php

session_start();

echo $_SESSION['ID'];
echo $_SESSION['name'];

// আমরা session.php ফাইল থেকে নাম, আইডি আক্সেস করতে পেরেছি । 
//ঠিক একই ভাবে অন্য ফাইলে এই কোড লিখলে এগুলা এক্সেস করা যাবে । 
?>
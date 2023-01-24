<?php
   
   include "php_extra/db_connect.php";
   if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
       $query = "INSERT INTO users (user_name, user_email, user_password) VALUES ('{$_POST['name']}', '{$_POST['email']}', '{$_POST['password']}')"; 

       $result = mysqli_query($link, $query);
   }
?>
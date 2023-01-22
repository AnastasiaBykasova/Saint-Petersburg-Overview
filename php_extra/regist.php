<?php
    include "db_connect.php";
    
    $query = "INSERT INTO users SET user_name = '".$_POST['regist_name']."', 
    user_email = '".$_POST['regist_email']."', user_password = '".$_POST['regist_password']."'";
    
    $result = mysqli_query($link, $query);

?>
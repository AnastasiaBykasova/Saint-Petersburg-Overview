<?php
    include "db_connect.php";
    
    $query = "INSERT INTO users SET regist_name = '".$_POST['regist_name']."', 
    regist_email = '".$_POST['regist_email']."', regist_password = '".$_POST['regist_password']."'";
    
    $result = mysqli_query($link, $query);

?>
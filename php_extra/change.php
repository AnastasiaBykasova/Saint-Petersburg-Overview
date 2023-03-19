<?php
   
    include "db_connect.php";
    require "auth.php";
    $user_email = $_SESSION['email'];
    $_SESSION['auth'] = true; 

    
    echo "email: "."$user_email";
    if (isset($_POST['old_password']) && isset($_POST['password'])) {
        $query = "SELECT * FROM users WHERE user_email='{$user_email}' AND user_password='{$_POST['password']}'";
        $result = mysqli_query($link, $query);
        $user = mysqli_fetch_assoc($result);

        if (!empty($user)) {
            $query = "update users set user_password = '{$_POST['password']}' where user_email='{$user_email}'";
            $result = mysqli_query($link, $query);
            echo "пароль успешно изменен";  
        }
        else {
            echo 'старый пароль введен неверно';
        }











    // //    $query = "INSERT INTO users (user_name, user_email, user_password) VALUES ('{$_POST['name']}', '{$_POST['email']}', '{$_POST['password']}')"; 
    //     $user_email = $_SESSION['email'];
    //     // echo "<input type='text' name='user_email' class='email' placeholder='$user_email'>";
    //     $old_password = $_POST['old_password'];
    //     $query = "SELECT * FROM users WHERE user_email='$user_email'";
    //     $result = mysqli_query($link, $query);
    //     $user = mysqli_fetch_assoc($result);
    //     $password = md5($_POST['password']);
    //     if (!empty($user)) {
    //         $query = "UPDATE users set user_password='$password' WHERE user_email='$user_email'";
            // $result = mysqli_query($link, $query);
            // echo "пароль успешно изменен";  
    //     } 
    //     else {
    //         echo 'старый пароль введен неверно';
            
    //     }

    }
    

?>
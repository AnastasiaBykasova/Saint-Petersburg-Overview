<?php
   
    include "db_connect.php";
    require "auth.php";
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        $user_email = $_POST['user_email'];
        $query = "SELECT * FROM users WHERE user_email='$user_email'";
		$result = mysqli_query($link, $query);
		$user = mysqli_fetch_assoc($result);
		
		if (!empty($user)) {
			echo "Пользователь с таким email уже существует.";
            header("Location: ../pesonal_page.php");
		} 
		else {
			if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $query = "INSERT INTO users (user_name, user_email, user_password) VALUES ('{$_POST['name']}', '{$_POST['email']}', '{$_POST['password']}')"; 
                echo "Регистрация завершена.";
                $_SESSION['auth'] = true;
                header("Location: ../pesonal_page.php");
            }
            else {
                echo "email введен неправильно.";
            }
           
    
            $result = mysqli_query($link, $query);
		}

        
    }
?>
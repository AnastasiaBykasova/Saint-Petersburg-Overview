<?php
   
    include "db_connect.php";
    require "auth.php";
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['check_password'])) {
        $user_email = $_POST['email'];
        $query = "SELECT * FROM users WHERE user_email='$user_email'";
		$result = mysqli_query($link, $query);
		$user = mysqli_fetch_assoc($result);
		
		if (!empty($user)) {
			echo "Пользователь с таким email уже существует. Войдите в свой аккаунт или создайте новый.<br>";
            // header("Location: ../personal_page.php");
		} 
		else {
			if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                if (($_POST['password'] == $_POST['check_password'])) {
                    // function generateSalt() {
                    //     $salt = '';
                    //     $saltLength = 8; // длина соли
                    //     for($i = 0; $i < $saltLength; $i++) {
                    //         $salt .= chr(mt_rand(33, 126)); // символ из ASCII-table
                    //     }
                    //     return $salt;
                    // }
                    // $salt = generateSalt(); // соль
                    // $password = md5($salt . $_POST['password']); // соленый пароль
                    $password = md5($_POST['password']); // преобразуем пароль в его хеш
                    $query = "INSERT INTO users (user_name, user_email, user_password) VALUES ('{$_POST['name']}', '{$_POST['email']}', '{$password}')"; 
                    // $auth_res = true;
                    $_SESSION['auth'] = true;
                    header("Location: ../personal_page.php");
                    echo "Регистрация завершена.";
                    $_SESSION['auth'] = true;
                }
                else {
                    echo "Пароли не совпадают.";
                }
            }
            else {
                echo "email введен неправильно.";
            }
           
    
            $result = mysqli_query($link, $query);
		}
        
        
    }
    else {
        echo "Введены не все данные";
    }
?>
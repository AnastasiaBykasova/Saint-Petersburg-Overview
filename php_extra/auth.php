<?php
    require "db_connect.php";
	session_start();
	if (!empty($_POST['user_password']) and !empty($_POST['user_email'])) {
		$user_email = $_POST['user_email'];
		$password = $_POST['user_password'];
		// $password = md5($_POST['user_password']); // преобразуем пароль в его хеш

		$query = "SELECT * FROM users WHERE user_email='$user_email' AND user_password='$password'";
			
		
		// $query = "SELECT * FROM users WHERE user_email='$user_email' AND user_password='$password'";
		$result = mysqli_query($link, $query);
		$user = mysqli_fetch_assoc($result);


		if (!empty($user)) { // пользователь с таким email есть, теперь надо проверять пароль...
			$_SESSION['auth'] = true;
			$_SESSION['email'] = $_POST['user_email'];
			$_SESSION['fav'] = null;
			header("Location: ../personal_page.php");
		} 
		else { // пользователя с таким email нет, выведем сообщение
			echo 'Данные введены неверно';
			$_SESSION['auth'] = false;
			header("Location: ../personal_page.php");
		}
	}


	// if (!empty($_POST['user_email']) and !empty($_POST['user_password'])) {
	// 	$user_email = $_POST['user_email'];
	// 	$user_password = $_POST['user_password'];
		
	// 	$query = "SELECT * FROM users WHERE user_email='$user_email' AND user_password='$user_password'";
	// 	$result = mysqli_query($link, $query);
	// 	$user = mysqli_fetch_assoc($result);
		
	// 	if (!empty($user)) {
	// 		// прошел авторизацию
    //         echo "<a>RRRRRRRRRRRRRRRRRRRRRRRRRRRRR</a>";
    //         print_r("yes");
	// 	} else {
	// 		// неверно ввел логин или пароль
    //         echo "<a>rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr</a>";
    //         print_r("no");
	// 	}
	// }
?>
<link rel="stylesheet" href="css/style.css">
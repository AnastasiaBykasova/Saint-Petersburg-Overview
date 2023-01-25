<?php
    require "db_connect.php";

	
	session_start();
	
	if (!empty($_POST['user_password']) and !empty($_POST['user_email'])) {
		$user_email = $_POST['user_email'];
		$password = $_POST['user_password'];
		
		
		$query = "SELECT * FROM users WHERE user_email='$user_email' AND user_password='$password'";
		$result = mysqli_query($link, $query);
		$user = mysqli_fetch_assoc($result);
		
		if (!empty($user)) {
			$_SESSION['auth'] = true;
			$_SESSION['email'] = $_POST['user_email'];
			header("Location: ../ztrying.php");
		} 
		else {
			echo '<p class="auth_error">Данные введены неверно</p>';
			$_SESSION['auth'] = null;
			// echo '<p class="auth_error">Данные введены неверно</p>';
			header("Location: ../ztrying.php");
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
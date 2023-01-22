<?php
    require "db_connect.php";

	if (!empty($_POST['user_email']) and !empty($_POST['user_password'])) {
		$user_email = $_POST['user_email'];
		$user_password = $_POST['user_password'];
		
		$query = "SELECT * FROM users WHERE user_email='$user_email' AND user_password='$user_password'";
		$result = mysqli_query($link, $query);
		$user = mysqli_fetch_assoc($result);
		
		if (!empty($user)) {
			// прошел авторизацию
            echo "<a>RRRRRRRRRRRRRRRRRRRRRRRRRRRRR</a>";
            print_r("yes");
		} else {
			// неверно ввел логин или пароль
            echo "<a>rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr</a>";
            print_r("no");
		}
	}
?>
<form action="" method="POST">
	<input name="login">
	<input name="password" type="password">
	<input type="submit">
</form>
<?php
	if (!empty($_POST['password']) and !empty($_POST['login'])) {
		$login = $_POST['login'];
		$password = $_POST['password'];
		
		$query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
		$result = mysqli_query($link, $query);
		$user = mysqli_fetch_assoc($result);
		
		if (!empty($user)) {
			// прошел авторизацию
		} else {
			// неверно ввел логин или пароль
		}
	}
?>
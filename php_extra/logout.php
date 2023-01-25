<?php 

require "php_extra/auth.php";
if (!empty($_SESSION['auth'])) {
    echo '<form method="post"><input type="submit" name="logout_button" value="Выход"></form>';
    if (isset($_POST['logout_button'])) {
        session_destroy();
        $_SESSION['auth'] = null;
        header("Location: ../auth_page.php");
        exit;
    }
}
else {
    echo "сначала авторизуйтесь";
}

?>
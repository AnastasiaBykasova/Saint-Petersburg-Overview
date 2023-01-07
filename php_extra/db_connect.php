<?php 
//--------------------------Настройки подключения к БД-----------------------
$db_host = 'std-mysql';
$db_user = 'std_1992_peter_overview'; //имя пользователя совпадает с именем БД
$db_password = '12345678'; //пароль, указанный при создании БД
$database = 'std_1992_peter_overview'; //имя БД, которое было указано при создании
$link = mysqli_connect($db_host, $db_user, $db_password, $database);
if ($link == False) {
    die("Cannot connect DB");
}

//----------------------------------------------------------------------------------------

?>
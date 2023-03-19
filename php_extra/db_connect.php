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



// $db_host = 'localhost';
// $db_user = 'nastybls_s_peter'; //имя пользователя совпадает с именем БД
// $db_password = 'nastya1045260/An'; //пароль, указанный при создании БД
// $database = 'nastybls_s_peter'; //имя БД, которое было указано при создании
// $link = mysqli_connect($db_host, $db_user, $db_password, $database);
// if ($link == False) {
//     die("Cannot connect DB");
// }



// database = nastybls_s_peter
// username = nastybls_s_peter
// password = показать
// host = nigagigen.beget.app
// port = 3306

//----------------------------------------------------------------------------------------

?>
<?php
    // include "db_connect.php";

    // $day_today = date("Y-m-d H:i:s"); //текущее время

    // // if (isset($_POST['message_name']) && isset($_POST['message_email']) && isset($_POST['message_subject']) && isset($_POST['message_text'])){
    // //     $query = "INSERT INTO messages SET message_name='".$_POST['message_name']."', message_email='".$_POST['message_email']."', 
    // //     message_subject='".$_POST['message_subject']."', message_text='".$_POST['message_text']."', message_day='$day_today', message_time='$day_today'";
    // // } 

    // // $query = "INSERT INTO messages SET message_name='".$_POST['message_name']."', message_email='".$_POST['message_email']."', 
    // // message_subject='".$_POST['message_subject']."', message_text='".$_POST['message_text']."', message_day='$day_today', message_time='$day_today'"; 

    // if (isset($_POST['message_name']) && isset($_POST['message_email']) && isset($_POST['message_subject']) && isset($_POST['message_text'])){
    //     $query = "INSERT INTO messages (message_name, message_email, message_subject, message_text, message_day, message_time) VALUES ('{$_POST['message_name']}', '{$_POST['message_email']}', '{$_POST['message_subject']}', '{$_POST['message_text']}', '{$day_today}', '{$date_today}')"; 

    //     // $result = mysqli_query($link, $query);
    // }

    // $result = mysqli_query($link, $query);




    // include "db_connect.php";

    // $day_today = date("Y-m-d H:i:s"); //текущее время

    // // $query = "INSERT INTO messages SET message_name='".$_POST['message_name']."', message_email='".$_POST['message_email']."', 
    // // message_subject='".$_POST['message_subject']."', message_text='".$_POST['message_text']."', message_day='$day_today', message_time='$day_today'"; 

    // $query = "INSERT INTO messages SET message_name='".$_GET['message_name']."', message_email='".$_GET['message_email']."', 
    // message_subject='".$_GET['message_subject']."', message_text='".$_GET['message_text']."', message_day='$day_today', message_time='$day_today'"; 

    // // $query = "INSERT INTO messages SET message_name='".$_POST['message_name']."', message_email='".$_POST['message_email']."', 
    // // message_subject='".$_POST['message_subject']."', message_text='".$_POST['message_text']."', message_day='$day_today', message_time='$day_today'"; 

    // // $query = "INSERT INTO messages SET message_name='".$_POST['message_name']."', message_email='".$_POST['message_email']."', 
    // // message_subject='$message_aim', message_text='".$_POST['message_text']."', message_time='$date_today'"; 

    // $result = mysqli_query($link, $query);


    include "db_connect.php";

    $day_today = date("Y-m-d H:i:s"); //текущее время

    // $query = "INSERT INTO messages SET message_name='".$_POST['message_name']."', message_email='".$_POST['message_email']."', 
    // message_subject='".$_POST['message_subject']."', message_text='".$_POST['message_text']."', message_day='$day_today', message_time='$day_today'"; 

    session_start();
    if (isset($_POST['message_name']) && isset($_POST['message_email']) && isset($_POST['message_subject']) && isset($_POST['message_text'])) {
        if (!empty($_POST)) {
            // сохраняем в базу
            
            $query = "INSERT INTO messages SET message_name='".$_POST['message_name']."', message_email='".$_POST['message_email']."', 
            message_subject='".$_POST['message_subject']."', message_text='".$_POST['message_text']."', message_day='$day_today', message_time='$day_today'"; 

            $_SESSION['flash'] = 'форма успешно сохранена';
            header('Location: ../contact.php');
        }
        else {
			$_SESSION['flash'] = 'форма не прошла валидацию';
		}
    }

    if (isset($_SESSION['flash'])) {
		echo $_SESSION['flash'];
		unset($_SESSION['flash']);
        print_r("сохранено успешно");
	}



    // $query2 = "INSERT INTO messages SET message_name=" + $_POST['message_name'] +", message_email=" + $_POST['message_email'] + 
    // ", message_subject=" + $_POST['message_subject'] + ", message_text=" + $_POST['message_text'] + ", message_day=" + $day_today + ", message_time=" + $day_today;
            

    // $query = "INSERT INTO messages SET message_name='".$_POST['message_name']."', message_email='".$_POST['message_email']."', 
    // message_subject='$message_aim', message_text='".$_POST['message_text']."', message_time='$date_today'"; 

    $result = mysqli_query($link, $query);



?>
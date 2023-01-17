<?php
    include "db_connect.php";

    $day_today = date("Y-m-d H:i:s"); //текущее время

    //if (isset($_POST['message_name']) && isset($_POST['message_email']) && isset($_POST['message_subject']) && isset($_POST['message_text'])){
        $query = "INSERT INTO messages SET message_name='".$_POST['message_name']."', message_email='".$_POST['message_email']."', 
        message_subject='".$_POST['message_subject']."', message_text='".$_POST['message_text']."', message_day='$day_today', message_time='$day_today'";
    //} 

    // $query = "INSERT INTO messages SET message_name='".$_POST['message_name']."', message_email='".$_POST['message_email']."', 
    // message_subject='$message_aim', message_text='".$_POST['message_text']."', message_time='$date_today'"; 

    //$result = mysqli_query($link, $query);


    // if (isset($_POST['message_name']) && isset($_POST['message_email']) && isset($_POST['message_subject']) && isset($_POST['message_text'])){
    //     $query = "INSERT INTO messages (message_name, message_email, message_subject, message_text, message_day, message_time) VALUES ('{$_POST['message_name']}', '{$_POST['message_email']}', '{$_POST['message_subject']}', '{$_POST['message_text']}', '{$day_today}', '{$date_today}')"; 

    //     $result = mysqli_query($link, $query);
    // }



?>
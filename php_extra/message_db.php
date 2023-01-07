<?php
    include "db_connect.php";

    $day_today = date("Y-m-d H:i:s"); //текущее время

    $query = "INSERT INTO messages SET message_name='".$_POST['message_name']."', message_email='".$_POST['message_email']."', 
    message_subject='".$_POST['message_subject']."', message_text='".$_POST['message_text']."', message_day='$day_today', message_time='$day_today'"; 

    // $query = "INSERT INTO messages SET message_name='".$_POST['message_name']."', message_email='".$_POST['message_email']."', 
    // message_subject='$message_aim', message_text='".$_POST['message_text']."', message_time='$date_today'"; 

    $result = mysqli_query($link, $query);
?>
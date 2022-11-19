<?php

    session_start();

    // Veritabanı bağlantımız
    require_once 'connect.php';


    $_SESSION['urunId'] = $_GET["id"];
    
    $myId = $_SESSION['urunId'];

    
    $myDelete = $db->prepare("delete from kisiler where id=?");

    $myDelete->execute([$myId]);

    header("location:liste.php");

    $db = null;
    


?>
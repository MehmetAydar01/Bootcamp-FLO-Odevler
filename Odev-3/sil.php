<?php

    session_start();

    // Veritabanı bağlantımız
    require_once 'connect.php';

    $toplamKayit = $_SESSION['toplamKayit'];


    $_SESSION['urunId'] = $_GET["id"];
    
    $myId = $_SESSION['urunId'];

    
    $myDelete = $db->prepare("delete from kisiler where id=?");

    $myDelete->execute([$myId]);

    header("location:liste.php");

    $db = null;
    


?>
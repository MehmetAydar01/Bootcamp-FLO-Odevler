<?php

    // Veritabanı bağlantımız
    require_once 'connect.php';

    // Güvenlik Fonksiyonumuz
    include_once 'guvenlikFonk.php';


    $adsoyad = guvenlik($_POST["adsoyad"]);
    $telefon = guvenlik($_POST["telefon"]);

    if ( (!empty($adsoyad)) && (!empty($telefon)) ) {
        
        $myInsert = $db->prepare("INSERT INTO kisiler (adsoyad, telefon) VALUES (?,?)");
    
        $result = $myInsert->execute([$adsoyad, $telefon]);
    
        if ($result) {

            header("location:liste.php");

        } else {

            echo "işlem başarısız";
            header("refresh:2;url=form.php");
            
        }

    } else {
        header("location:form.php");
    }

    $db = null

?>
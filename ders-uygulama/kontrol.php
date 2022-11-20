<?php
 
    session_start();

    $kullanici = $_POST["kullanici"];
    $sifre = $_POST["sifre"];


    if ($kullanici == "admin" && $sifre == "1234") {

        $_SESSION["oturum"] = "var";
        setcookie("cerez", "var", time()+3600);

        header("Location: admin.php");
    } else {
        header("Location: Ders-UyeGirisFormu.php");
    }





?>
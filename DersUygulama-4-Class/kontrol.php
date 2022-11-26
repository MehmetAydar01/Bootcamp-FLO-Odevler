<?php

    include_once "tckimlik.php";

    if (@$_POST["kontrol"] != "1") {
        @header("Location:index.php");
    }

    $adsoyad = $_POST["adsoyad"];
    $tckimlik = $_POST["tckimlik"];

    $tckontrol = new tcKimlik($adsoyad, $tckimlik);
    $dogrula = $tckontrol->dogrula();
    $kaydet = $tckontrol->kaydet();

    if ($dogrula == true) {
        echo "DOĞRULAMA : TC Kimlik Numarası Doğrulandı";
    } else {
        echo "DOĞRULAMA : " . $tckontrol->mesaj();
    }

    if ($kaydet == true) {
        echo "<br>KAYIT : Kayıt Yapıldı!";
    } else {
        echo "<br> KAYIT: Kayıt Yapılamadı";
    }

?>
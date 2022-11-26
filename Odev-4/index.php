<?php

    // sinif.php dosyamızı buraya gömelim.
    require_once 'sinif.php';
    
    // sinif.php içerisinde oluşturduğumuz class'ı çağıralım.
    $rehberNesne = new Rehber();

?>



<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ödev-4</title>
</head>
<body style="text-align: center;">

    <form action="index.php" method="post">

        <b>Ad Soyad : </b><br>
        <input type="text" name="adsoyad"><br><br>
        <b>TC Kimlik : </b><br>
        <input type="number" name="tckimlik"><br><br>

        <input type="submit" value="Doğrula ve Kaydet">
    </form><br><br><br><br><br><br>

    <?php
    
        if ($_POST) {
            
            $adsoyad = htmlspecialchars(trim($_POST["adsoyad"]));
            $tckimlik = htmlspecialchars(trim($_POST["tckimlik"]));
            
            if ( (!empty($adsoyad)) && (!empty($tckimlik)) && $tckimlik[0] != 0  && strlen($tckimlik) == 11 ) {
                

                $rehberNesne->Ekle($adsoyad, $tckimlik);

                // Sayfa refresh edildikten sonra forma gönderilen son verinin silinmesini sağlıyoruz. 46. ve 47. satırdan herhangi birisini kullanabiliriz.
                // echo "<meta http-equiv='refresh' content='0'>";
                header("Refresh: 0");

            } else {
                header("Location:index.php");
            }

        }

    ?>


    <?php
        
        $rehberNesne->verileriAl();
        
    ?>

</body>
</html>
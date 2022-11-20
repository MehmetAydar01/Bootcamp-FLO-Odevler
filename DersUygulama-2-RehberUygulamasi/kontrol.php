<?php

    require_once 'fonksiyon.php';

    $adsoyad = guvenlik($_POST["adsoyad"]);
    $email = guvenlik($_POST["email"]);
    $telefon = guvenlik($_POST["telefon"]);


    if ($adsoyad == '' || $email == '' || strlen($telefon) < 10 ) {
        echo "<script>
            alert('Ad Soyad, Email veya Telefon Hatalı!');
            window.top.location = 'index.php';
        </script>";
        die(); // exit(); de kullanabiliriz.
    }

    $dosya = fopen("rehber.txt", "abt");
    $sonuc = fwrite($dosya, "$adsoyad | $email | $telefon\n");
    fclose($dosya);

    if ($sonuc) {
        echo "<script>
            alert('$adsoyad, Kayıt Edildi!');
            window.top.location = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Hata: $adsoyad, Kayıt Edilemedi!');
            window.top.location = 'index.php';
        </script>";
    }

?>
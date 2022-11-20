<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste PHP</title>
</head>
<body>

    <?php
        include_once 'menu.php';
    ?>

    <?php

        $sayac = 0;
        $satirlar = [];

        $dosya = fopen("rehber.txt", "rb");

        // $icerik = fread($dosya, filesize("rehber.txt"));
        // echo $icerik;

        while(!feof($dosya)) {
            $satirlar[] = fgets($dosya);
        }

        fclose($dosya);

        // array_pop($satirlar); ile de son satırı silebiliriz. Fakat aşağıda foreach kısmındaki if i kullanmayı tercih ettik.

        echo "<table border='1' width='100%'>
            <tr>
                <td>S.No</td>
                <td>Adı Soyadı</td>
                <td>E-mail Adresi</td>
                <td>Telefon No</td>
            </tr>
        ";
        foreach ($satirlar as $satir) {
            $veri = explode(" | ", $satir);

            if ($veri[0] != "") {
                $sayac++;
                echo "
                <tr>
                    <td>$sayac</td>
                    <td>$veri[0]</td>
                    <td>$veri[1]</td>
                    <td>$veri[2]</td>
                </tr>
            ";
            }
        
        }

        echo "</table>";

    ?>

    
</body>
</html>



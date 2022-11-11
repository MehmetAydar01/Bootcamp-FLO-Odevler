<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sepet</title>
    <style>
        h2 {
            text-align: center;
            color: #490206;
        }
        th, td {
            padding: 10px;
        }
        div {
            width: 600px;
            background-color: lightsalmon;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

<?php

    $urun0 = "";
    $urun1 = "";
    $urun2 = "";
    $toplam = "";

    if ($_POST) {
        
    session_start();

?>

    <h2>Sepetiniz:</h2>

    <div>
    <table border="1">
        <thead>
            <th><?php echo $_SESSION["urunlerListesi"]["titles"][0]; ?></th>
            <th><?php echo $_SESSION["urunlerListesi"]["titles"][2]; ?></th>
            <th><?php echo $_SESSION["urunlerListesi"]["titles"][3]; ?></th>
        </thead>
        <tbody>
            <?php
                if ($_SESSION["urunlerListesi"]["urunAdedi"][0] > 0) {
            ?>
            <tr>
                <td>
                    <?php echo $_SESSION["urunlerListesi"]["urunAdi"][0]; ?>
                </td>
                <td style="text-align: center;">
                    <?php echo $_SESSION["urunlerListesi"]["urunAdedi"][0]; ?>
                </td>
                <td style="text-align: center; border: 1px solid black;">
                    <?php $urun0 = $_SESSION["urunlerListesi"]["urunAdedi"][0] * $_SESSION["urunlerListesi"]["urunFiyati"][0]; echo $urun0; ?> TL.
                </td>
            </tr>
            <?php } ?>

            <?php
                if ($_SESSION["urunlerListesi"]["urunAdedi"][1] > 0) {
            ?>
            <tr>
                <td>
                    <?php echo $_SESSION["urunlerListesi"]["urunAdi"][1]; ?>
                </td>
                <td style="text-align: center;">
                    <?php echo $_SESSION["urunlerListesi"]["urunAdedi"][1]; ?>
                </td>
                <td style="text-align: center; border: 1px solid black;">
                    <?php $urun1 = $_SESSION["urunlerListesi"]["urunAdedi"][1] * $_SESSION["urunlerListesi"]["urunFiyati"][1]; echo $urun1; ?> TL.
                </td>
            </tr>
            <?php } ?>

            <?php
                if ($_SESSION["urunlerListesi"]["urunAdedi"][2] > 0) {
            ?>
            <tr>
                <td>
                    <?php echo $_SESSION["urunlerListesi"]["urunAdi"][2]; ?>
                </td>
                <td style="text-align: center;">
                    <?php echo $_SESSION["urunlerListesi"]["urunAdedi"][2]; ?>
                </td>
                <td style="text-align: center; border: 1px solid black;">
                    <?php $urun2 = $_SESSION["urunlerListesi"]["urunAdedi"][2] * $_SESSION["urunlerListesi"]["urunFiyati"][2]; echo $urun2;  ?> TL.
                </td>
            </tr>
            <?php } ?>

            <tr>
                <td colspan="2">Genel Toplam</td>
                <td style="text-align: center;">
                    <?php
                        if ($urun0) {
                            $toplam = $urun0;
                            if ($urun1) {
                                $toplam = $toplam + $urun1;
                                if ($urun2) {
                                    $toplam = $toplam + $urun2;
                                }
                            }
                            echo $toplam;
                        }
                        elseif ($urun1) {
                            $toplam = $urun1;
                            if ($urun2) {
                                $toplam = $toplam + $urun2;
                                if ($urun0) {
                                    $toplam = $toplam + $urun0;
                                }
                            }
                            echo $toplam;
                        }
                        elseif ($urun2) {
                            $toplam = $urun2;
                            if ($urun0) {
                                $toplam = $toplam + $urun0;
                                if ($urun1) {
                                    $toplam = $toplam + $urun1;
                                }
                            }
                            echo $toplam;
                        } else {
                            $toplam = 0;
                            echo $toplam;
                        }
                    ?>
                TL.</td>
            </tr>
        </tbody>
    </table>
</div>
    
</body>
</html>


<?php
    }
?>



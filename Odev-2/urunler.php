<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürünler</title>
    <style>
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
        form {
            text-align: right;
        }
        form input {
            margin: 10px;
            padding: 8px 16px;
            border:0;
            border-radius: 16px;
            background-color: #503130;
            color: wheat;
            cursor: pointer;
            transition: all .5s ease;
        }

        form input:hover {
            color: #490206;
            background-color: #d2691e;
        }
    </style>
</head>
<body>

    <?php

        session_start();

        $ulkerCikolata = $_POST["ulkerCikolataAdedi"];
        $etiCikolata = $_POST["etiCikolataAdedi"];
        $nestleCikolata = $_POST["nestleCikolataAdedi"];

        if ( empty($ulkerCikolata) ) {
            $ulkerCikolata = 0;
        }
        if ( empty($etiCikolata) ) {
            $etiCikolata = 0;
        }
        if ( empty($nestleCikolata) ) {
            $nestleCikolata = 0;
        }



        $urunlerim = [
            "titles" => ["Ürün Adı", "Ürün Fiyatı", "Adet", "Toplam"],
            "urunAdi" => ["Ülker Çikolatalı Gofret 40 gr.", "Eti Damak kare Çikolata 60 gr.", "Nestle Bitter Çikolata 50 gr."],
            "urunFiyati" => ["20", "30", "40"],
            "urunAdedi" => [$ulkerCikolata, $etiCikolata, $nestleCikolata]
        ];

        $_SESSION["urunlerListesi"] = $urunlerim;


    ?>

    <div>
        <table border="1">
            <thead>
                <th><?php echo $_SESSION["urunlerListesi"]["titles"][0]; ?></th>
                <th><?php echo $_SESSION["urunlerListesi"]["titles"][1]; ?></th>
                <th><?php echo $_SESSION["urunlerListesi"]["titles"][2]; ?></th>
            </thead>
            <tbody>
                <tr>
                    <td><?php
                    echo $_SESSION["urunlerListesi"]["urunAdi"][0];
                    ?></td>
                    <td style="text-align: center;"><?php echo $_SESSION["urunlerListesi"]["urunFiyati"][0]; ?> TL.</td>
                    <td style="text-align: center; border: 1px solid black;"><?php echo $_SESSION["urunlerListesi"]["urunAdedi"][0]; ?></td>
                </tr>
                <tr>
                    <td><?php echo $_SESSION["urunlerListesi"]["urunAdi"][1]; ?></td>
                    <td style="text-align: center;"><?php echo $_SESSION["urunlerListesi"]["urunFiyati"][1]; ?> TL.</td>
                    <td style="text-align: center; border: 1px solid black;"><?php echo $_SESSION["urunlerListesi"]["urunAdedi"][1]; ?></td>
                </tr>
                <tr>
                    <td><?php echo $_SESSION["urunlerListesi"]["urunAdi"][2]; ?></td>
                    <td style="text-align: center;"><?php echo $_SESSION["urunlerListesi"]["urunFiyati"][2]; ?> TL.</td>
                    <td style="text-align: center; border: 1px solid black;"><?php echo $_SESSION["urunlerListesi"]["urunAdedi"][2]; ?></td>
                </tr>
            </tbody>
        </table>
        <form action="sepet.php" method="post">
            <input type="submit" name="dugme" value="Ürünü Sepete Ekle">
        </form>
    </div>

 
</body>
</html>
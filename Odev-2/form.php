<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ödev 2 - Ürün Tasarım</title>
    <style>
        form {
            width: 50%;
            margin: 0 auto;
            background-color: #503130;
            text-align: center;
        }

        fieldset {
            width: 80%;
            margin: 0 auto;
            background-color: #42261E;
        }

        b {
            color: wheat;
            display: inline-block;
            margin-bottom: 4px;
        }

        input:last-child {
            cursor: pointer;
            border: 0;
            outline: 0;
            padding: 7px;
            color: wheat;
            background-color: #503130;
            border-radius: 14px;
            transition: all .5s ease;
        }
        input:last-child:hover {
            color: #42261E;
            background-color: wheat;
        }
    </style>
</head>
<body>

    <form action="urunler.php" method="post">
        <fieldset>
            <b>Ülker Çikolatalı Gofret</b> <br>
            <input type="number" name="ulkerCikolataAdedi"><br><br>
            <b>Eti Damak Kare Çikolata</b><br>
            <input type="number" name="etiCikolataAdedi"><br><br>
            <b>Nestle Bitter Çikolata</b><br>
            <input type="number" name="nestleCikolataAdedi"><br><br>
            <input type="submit" name="dugme" value="Ürün Adetlerini Ekle">
        </fieldset>
    </form>
    
</body>
</html>
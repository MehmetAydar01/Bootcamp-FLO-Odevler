<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telefon Rehberi</title>
</head>
<body>

    <?php
        session_start();
    ?>

    <div style="text-align: center; margin-top: 50px; margin-bottom: 50px;">
        <h2><a href="form.php">Form</a> - <a href="liste.php">Liste</a></h2>
    </div>

    <h3 style="text-align: center;">Form Sayfası:</h3>

    <form style="text-align:center; margin-top: 50px;" action="kaydet.php" method="post">

        <b>Adınız Soyadınız:</b><br>
        <input type="text" name="adsoyad">
        <br><br>

        <b>Telefon Numaranız:</b><br>
        <input type="text" name="telefon">
        <br><br>
        
        <input type="hidden" name="id" value="<?php if (isset($_SESSION['urunId'])) {
            echo $_SESSION['urunId'];
        }?>">
        <input style="cursor:pointer; background-color: #4472C4; color: white; border:0; padding:6px 24px;" type="submit" value="Bilgileri Kaydet">

    </form>
    
</body>
</html>
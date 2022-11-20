<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">

    <!-- REHBER UYGULAMASI -->

    <?php
        include_once 'menu.php';
    ?>

    <form method="post" action="kontrol.php">
        <b>Adı Soyadı:</b><br>
        <input type="text" name="adsoyad">
        <br><br>
        <b>E-mail Adresi:</b><br>
        <input type="email" name="email">
        <br><br>
        <b>Telefon Numarası:</b><br>
        <input type="tel" name="telefon">
        <br><br>
        <input type="submit" value="Kaydet">
    </form> <br><br><br>
    
</body>
</html>
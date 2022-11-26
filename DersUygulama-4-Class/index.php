<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">
    <form action="kontrol.php" method="post">
        Ad Soyad: <input type="text" name="adsoyad"><br>
        Tc Kimlik: <input type="text" name="tckimlik"><br>
        <input type="hidden" name="kontrol" value="1">
        <button type="submit">Doğrula ve Kaydet</button>
    </form>
</body>
</html>
<?php
   
    session_start();

    if (isset($_SESSION["oturum"]) && isset($_COOKIE["cerez"])) {

        if ($_SESSION["oturum"] != "var" && $_COOKIE["cerez"] != "var") {
            header("Location: Ders-UyeGirisFormu.php");
        }

    } else {
        header("Location: Ders-UyeGirisFormu.php");
    }

    

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>Merhaba Admin</p>
    <a href="cikis.php">Cikis Yap</a>
    
</body>
</html>
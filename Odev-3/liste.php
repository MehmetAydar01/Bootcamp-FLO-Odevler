<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>
    <style>
        table {
            width: 80%;
            margin: 0 auto;
            font-size: 16px;
        }
        table,th,td {
            border: 1px solid black; border-collapse: collapse;
        }
        td, th {
            padding: 6px;
        }
        a {
            color: black;
        }
    </style>
    <!-- Font awesome link -->
    <script src="https://kit.fontawesome.com/7cb9ac4c0d.js" crossorigin="anonymous"></script>
</head>
<body>

    <div style="text-align: center; margin-top: 50px; margin-bottom: 50px;">
        <h2><a href="form.php">Form</a> - <a href="liste.php">Liste</a></h2>
    </div>

    
</body>
</html>



<?php

    session_start();

    // Veritabanı bağlantımız
    require_once 'connect.php';


    $select = $db->prepare("SELECT id, adsoyad, telefon FROM kisiler");

    $select->execute();

    // verileri dizi halinde alalım.
    $result = $select->fetchAll(PDO::FETCH_ASSOC);


    // Veritabanımızda bulunan tablodaki kayıt sayısı
    $_SESSION['toplamKayit'] = $select->rowCount();

    
    
    
    /* istersek verilerin çıktısını almak için while ile dönebiliriz. İstersek de foreach ile dönebiliriz.*/

    /*
        while ($result = $select->fetch(PDO::FETCH_ASSOC)) {
            echo $result["adsoyad"] . " ". $result["telefon"] . "<br>";
        }
    */
    

    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";


    echo "<h2 style='text-align:center;'>Liste Sayfası:</h2>";

    echo "<table>
    <tr>
        <th>Adı Soyadı</th>
        <th>Telefon Numarası</th>
        <th>İşlem</th>
    </tr>";

    foreach ($result as $row) {
        
        echo "<tr>
        <td>$row[adsoyad]</td>
        <td align='center'>$row[telefon]</td>
        <td align='center'><a href='sil.php?id=$row[id]'>sil <i class='fa-solid fa-trash-can'></i></a> </td>
        </tr>";
    }
    

    echo "
        <tr style='text-align:center; padding:50px;'>
            <td colspan='3'>Sistemde Toplam - $_SESSION[toplamKayit] - kayıt Var.</td>
        </tr>
    </table>";



    $db = null;


?>
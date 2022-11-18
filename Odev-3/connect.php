<?php

    // Veritabanı bağlantımız

    try {
        $db = new PDO("mysql:host=localhost;dbname=rehber;charset=utf8", "mehmet", "1234");
    } catch ( PDOException $e ) {
        echo "baglanti saglanamadi " .  $e->getMessage();
    }


?>
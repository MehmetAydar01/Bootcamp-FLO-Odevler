<?php

    class Rehber {
        
        // __construct
        public function __construct() {
            try {
                $baglan = new PDO("mysql:host=localhost;dbname=oop_rehber;charset=utf8", "mehmet", "1234");
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            return $baglan;
        }


        // Verileri Veritabanına Ekleme
        public function Ekle($adsoyad, $tckimlik) {

            $baglanti = self::__construct();
            $sorgu = $baglanti->prepare("insert into kisiler (adsoyad, tckimlik) values (?,?)");
            $insert = $sorgu->execute([$adsoyad, $tckimlik]);

            if ($insert) {
                echo "<script>alert('İşlem Başarılı');</script>";
            } else {
                echo "<script>alert('İşlem Başarısız');</script>";
                header("Location:index.php");
            }

        }


        // Veritabanından Verileri Alma
        public function verileriAl() {

            $baglanti = self::__construct();
            $select = $baglanti->prepare("select * from kisiler");
            $select->execute();

            // verileri dizi halinde alalım.
            $result = $select->fetchAll(PDO::FETCH_ASSOC);

            // echo "<pre>";
            // print_r($result);
            // echo "</pre>";

            $tekToplam = 0;
            $ciftToplam = 0;
            $toplam = 0;
            $durum = "";
            $kalan = 0;

            // Tabloda Bulunan Satir Sayisi
            $satirSayisi = $select->rowCount();

            // echo "<pre>";
            // print_r($result);
            // echo "</pre>";
                        
            // Tablo Basligi
            if ($satirSayisi > 0) {
                echo "<table border='1' width='100%'>
                    <tr>
                        <th>id</th>
                        <th>adsoyad</th>
                        <th>tckimlik</th>
                        <th>durum</th>
                    </tr>
                ";
            }

            // Veritabanında bulunan verileri dizi halinde aldıktan sonra işleme alalım.
            foreach ($result as $satir) {

                for ($i=0; $i < 1; $i++) {
                                            
                    for ($j=0; $j < 9; $j=$j+2) {

                        $tekToplam = $tekToplam + (int)$satir["tckimlik"][$j];

                        if ($j < 8 ) {
                            $ciftToplam = $ciftToplam + (int)$satir["tckimlik"][$j + 1];
                        }
                        
                    }

                }

                $toplam = $tekToplam +  $ciftToplam + (int)$satir["tckimlik"][9] + (int)$satir["tckimlik"][10];

                $kalan = ($tekToplam * 7) - $ciftToplam;

                if ($kalan %10 == $satir["tckimlik"][9] && $toplam %10 == $satir["tckimlik"][10] ) {
                    $durum = "Geçerli";
                } else {
                    $durum = "Geçersiz";
                }
    
                echo "
                    <tr>
                        <td>$satir[id]</td>
                        <td>$satir[adsoyad]</td>
                        <td>$satir[tckimlik]</td>
                        <td>TC Kimlik $durum</td>
                    </tr>
                ";

                $ciftToplam = 0;
                $tekToplam = 0;
                $durum = "";
                $toplam = 0;

            }

            echo "</table>";

        }


        public function __destruct() {
            $bosalt = self::__construct();
            $bosalt = null;
        }

    }

?>
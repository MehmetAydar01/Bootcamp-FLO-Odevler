<?php
    
    $toplamKoyun = 73;
    $toplamKapasite = 150;
    $agilKapasitesi = 30;
    $toplamAgil = 5;
    $disardaKalanKoyun = $toplamKoyun - ($agilKapasitesi * $toplamAgil);
    
    echo "Toplam Ağıl: $toplamAgil<br>" . "Toplam Kapasite: $toplamKapasite<br>" . "Toplam Koyun: $toplamKoyun<br>" . "<br>";

    for (; $toplamAgil > 0 ; $toplamAgil--) {

        echo "$toplamAgil. Ağıl : ";

        if ($toplamKoyun > $agilKapasitesi) {       
            echo $agilKapasitesi . "<br>";
            $toplamKoyun = $toplamKoyun - $agilKapasitesi;
            
            if ($toplamKoyun == $disardaKalanKoyun) {
                echo "<br>Dışarıda Kalan :" . $disardaKalanKoyun . "<br>";
            }

        } else if ($toplamKoyun < $agilKapasitesi) {
            $agilKapasitesi = $toplamKoyun;
            echo $agilKapasitesi . "<br>";
            $toplamKoyun = $toplamKoyun - $agilKapasitesi;
            
        } else if ($toplamKoyun == 0) {
            $agilKapasitesi = $toplamKoyun;
            echo $agilKapasitesi . "<br>";
        }

    }


?>
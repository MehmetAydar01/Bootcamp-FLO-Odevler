<?php

    // Güvenlik Kontrolleri
    
    function guvenlik($metin = '') {
        $metin = strip_tags($metin);
        $metin = htmlspecialchars($metin);
        return $metin;
    }

?>
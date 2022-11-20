<?php 
    session_start();

    session_destroy(); // her sessionu siler

    // unset($_SESSION["oturum"]); istedigimiz sessionu siler.

    setcookie("cerez", "", time()-1);

    header("Location: Ders-UyeGirisFormu.php");
?>
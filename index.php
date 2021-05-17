<?php 
    $parola = $_GET['censurare'];
    // echo $parola;

    $mia_stringa = "Mi piace il pesce e a volte ci gratto sopra il formaggio";

    $lunghezza = strlen($mia_stringa);

    $risultato = str_replace($parola, '***', $mia_stringa);

?>

<p><?php echo $lunghezza; ?></p>

<h1><?php echo $risultato; ?></h1>
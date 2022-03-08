<?php
    // Jelek = 0
    // Bagus = 1
    $mesin  = 1;
    $body   = 1;

    $kondisi = "";

    if($mesin && $body){
        $kondisi = "Bagus";
    }else if($mesin || $body){
        $kondisi = "Menengah";
    }else{
        $kondisi = "Jelek";
    }

    echo "Kondisi mobil $kondisi";
?>
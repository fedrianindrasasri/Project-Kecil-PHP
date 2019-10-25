<?php

    $bulan_ini = date('n');
    echo $bulan_ini;
    echo "<br/>";

    
    if($bulan_ini <= 6){
        echo "Semester Genap";
    }else{
        echo "Semester Ganjil";
    }

?>
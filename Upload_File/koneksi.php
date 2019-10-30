<?php

    $host = mysqli_connect("localhost", "root", "cobadulu", "belajar-php-1");

    if($host){
        echo "Berhasil";
    }else{
        echo "Gagal";
    }
?>
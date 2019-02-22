<?php
    $nilai = 1010;
    if ($nilai >= 75 && $nilai <= 100) { 
        echo "Nilai Anda $nilai, Anda LULUS";
    }else if ($nilai > 100) {
        echo "Anda lulus dengan nilai $nilai    , Anda Hebat";
    }else{
    echo "Nilai Anda $nilai, Anda GAGAL";
    }
?>
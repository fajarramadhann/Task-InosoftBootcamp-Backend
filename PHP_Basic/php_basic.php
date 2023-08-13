<?php

function phi(){
    return 3.14;
}

function luasLingkaran(int $angka){
    $radius = $angka / 3;
    return phi() * $radius * $radius;
}

function kelilingLingkaran(int $angka){
    $radius = $angka / 5;
    return phi() * 2 * $radius;
}

function luasPersegi(int $angka){
    $panjang = $angka / 3;
    $lebar = $angka / 5;
    return $panjang * $lebar;
}

function getNumber(int $angka){
    if ($angka % 3 == 0 && $angka % 5 == 0){
        return luasPersegi($angka);
    }
    else if ($angka % 3 == 0){
        return luasLingkaran($angka);
    }
    else if ($angka % 5 == 0){
        return kelilingLingkaran($angka);
    }
    return $angka;
}

for ($i = 1; $i <= 100; $i++){
    $number = getNumber($i);
    $formattedNumber = number_format($number, 2, '.', '');
    echo $formattedNumber . "\n";
}

?>
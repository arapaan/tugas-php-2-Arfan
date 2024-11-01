<?php
    // Fungsi Penghitungan Luas Persegi
    $angka = 10;
    function luas_persegi($sisi) {
        $luas = $sisi * $sisi;
        return $luas;
        }

        $rumus = Luas_persegi($angka);

        if ($angka > 0) {
            echo"Luas persegi : " . $rumus;
        } else {
            echo "Maaf, Anda harus memasukkan angka yang lebih dari 0";
        };


    // Fungsi Menyaring Bilangan Ganjil
    function filterNumber($array) {
        foreach($array as $elemen) {
            if (!is_numeric($elemen)) {
                return "Error: Anda harus memasukkan berupa angka";
            }

            if (!is_float($elemen)) {
                continue;
            }
        }
    
        $Filter_Number = array_filter($array, function($number) {
            return is_int($number) && $number % 2 != 0;
        });
    
        return $Filter_Number;
    }
    
    $inputArray = [1, 2, 3, 4, 5, 1.2, 1.5, 1.9, 9, 7];
    $result = filterNumber($inputArray);
    
    if (is_array($result)) {
        print_r($result);
    } else {
        echo $result;
    }  
?>
<?php
function pasangan_terbesar($angka){
// kode di sini
    $max = 0;
    $fp = 0;
    $string = strval($angka);
    for($i=0; $i<strlen($string); $i++){
        if(ord($string[$i])>$max){
            $fp=$i;
            $max=ord($string[$i]);
        }
    }
    return $string[$fp].$string[$fp+1]."<br>";
}
 
// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99
 
?>

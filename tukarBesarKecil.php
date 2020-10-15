<?php
function tukar_besar_kecil($string){
//kode di sini
    for($i=0; $i<strlen($string); $i++){
        if(ctype_alpha($string[$i])==true){
            if(ctype_upper($string[$i])==true){
                $string[$i] = strtolower($string[$i]);
            }
            else{
                $string[$i] = strtoupper($string[$i]);
            }
        }
    }
    return $string."<br>";
}
 
// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"
 
?>

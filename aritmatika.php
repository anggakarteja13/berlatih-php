<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
    for($i=1; $i<count($arr); $i++){
        $j=$i-1;
        if($arr[$i]-$arr[$j]!=2){
            return "false<br>";
        }
    }
    return "true<br>";
}
 
// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>

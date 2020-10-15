<?php
 
function papan_catur($angka) {
// tulis kode di sini
    $l = 1;
    while($l<=$angka){
        if(($l%2)!=0){
            $c = $angka;
            while($c!=0){
                echo "# ";
                $c--;
            }
        }
        else{
            $c = $angka-1;
            while($c!=0){
                echo("&nbsp");
                echo "#";
                $c--;
            }
        }
        echo "<br>";
        $l++;
    }
}
 
// TEST CASES
echo papan_catur(4)."<br>";
/*
# # # #
 # # #
# # # #
 # # #
 */
 
echo papan_catur(8)."<br>";
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5)."<br>";
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/

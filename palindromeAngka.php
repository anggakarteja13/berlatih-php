<?php
 
function palindrome_angka($angka) {
  // tulis kode di sini
  $first = 1;
  $second = 2;
  
  while ($first != $second) {
    $angka++;
    $string = strval($angka);
    $first = substr($string, 0, ceil(strlen($string)/2));
    $second = strrev(substr($string, floor(strlen($string)/2), strlen($string)));
  }
  return $angka;  
}
 
// TEST CASES
echo palindrome_angka(8)."<br>"; // 9
echo palindrome_angka(10)."<br>"; // 11
echo palindrome_angka(117)."<br>"; // 121
echo palindrome_angka(175)."<br>"; // 181
echo palindrome_angka(1000)."<br>"; // 1001
?>

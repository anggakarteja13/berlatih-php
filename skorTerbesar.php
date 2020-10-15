<?php
function skor_terbesar($arr){
//kode di sini
  $fArr=array("Laravel"=>array("nama"=>NULL, "kelas"=>NULL, "nilai"=>NULL), "React Native"=>array("nama"=>NULL, "kelas"=>NULL, "nilai"=>NULL), "React JS"=>array("nama"=>NULL, "kelas"=>NULL, "nilai"=>NULL));
  for($i=0; $i<count($arr); $i++){
    if($arr[$i]["kelas"]==$fArr["Laravel"]["kelas"]){
      if($arr[$i]["nilai"]>$fArr["Laravel"]["nilai"]){
        $fArr["Laravel"]["nama"]=$arr[$i]["nama"];
        $fArr["Laravel"]["kelas"]=$arr[$i]["kelas"];
        $fArr["Laravel"]["nilai"]=$arr[$i]["nilai"];
      }
    }
    if($arr[$i]["kelas"]==$fArr["React Native"]["kelas"]){
      if($arr[$i]["nilai"]>$fArr["React Native"]["nilai"]){
        $fArr["React Native"]["nama"]=$arr[$i]["nama"];
        $fArr["React Native"]["kelas"]=$arr[$i]["kelas"];
        $fArr["React Native"]["nilai"]=$arr[$i]["nilai"];
      }
    }
    if($arr[$i]["kelas"]==$fArr["React JS"]["kelas"]){
      if($arr[$i]["nilai"]>$fArr["React JS"]["nilai"]){
          $fArr["React JS"]["nama"]=$arr[$i]["nama"];
          $fArr["React JS"]["kelas"]=$arr[$i]["kelas"];
          $fArr["React JS"]["nilai"]=$arr[$i]["nilai"];
      }
    }
    else{
      if($arr[$i]["kelas"]=="Laravel"){
          $fArr["Laravel"]["nama"]=$arr[$i]["nama"];
          $fArr["Laravel"]["kelas"]=$arr[$i]["kelas"];
          $fArr["Laravel"]["nilai"]=$arr[$i]["nilai"];
      }
      if($arr[$i]["kelas"]=="React Native"){
          $fArr["React Native"]["nama"]=$arr[$i]["nama"];
          $fArr["React Native"]["kelas"]=$arr[$i]["kelas"];
          $fArr["React Native"]["nilai"]=$arr[$i]["nilai"];
      }
      if($arr[$i]["kelas"]=="React JS"){
            $fArr["React JS"]["nama"]=$arr[$i]["nama"];
            $fArr["React JS"]["kelas"]=$arr[$i]["kelas"];
            $fArr["React JS"]["nilai"]=$arr[$i]["nilai"];
      }
    }
  }
  return $fArr;
}
 
// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
];
 
print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>

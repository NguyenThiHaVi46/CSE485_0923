<?php
 $a = [
    'a' => [
      'b' => 0,
      'c' => 1
    ],
    'b' => [
      'e' => 2,
      'o' => [
         'b' => 3
      ]
    ]
   ]; 

   $valueB = $a['b']['o']['b'];
   echo "Giá trị có key là 'b': $valueB ". '</br>';
   $valueC = $a['a']['c'];
   echo "Giá trị có key là 'c': $valueC". '</br>';
   $infoA = $a['a'];
   print_r($infoA);
?>
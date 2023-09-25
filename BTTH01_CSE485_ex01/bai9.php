<?php
 $arrs1 = ['1', 'B', 'C', 'E'];
 $arrs2 = ['a', 0, null, false];

 //Chuyển đổi thành chữ thường
 $arrs1 = array_map('strtolower', $arrs1);
 $arrs2 = array_map('strtolower', $arrs2);

 // In ra kết quả
 print_r($arrs1);
 echo '<br>';
 print_r($arrs2);
 echo '<br>';
?>
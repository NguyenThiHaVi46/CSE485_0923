<?php
 $arrs1 = ['1', 'b', 'c', 'd'];
 $arrs2 = ['a', 0, null, false];

 // Chuyển đổi thành chữ in hoa
 $arrs1 = array_map('strtoupper',($arrs1));
 $arrs2 = array_map('strtoupper',($arrs2));

 // In ra kết quả
 print_r($arrs1);
 echo $arrs1;
 print_r($arrs2);
 echo $arrs2;
?>
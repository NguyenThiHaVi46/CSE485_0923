<?php
 $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
 $mang_temp = array_map('strlen', $array);
 echo "Chuỗi lớn nhất là: " . min($mang_temp) .  
	    ". <br>Chuỗi ngắn nhất là: " . max($mang_temp).'.';
 
?>
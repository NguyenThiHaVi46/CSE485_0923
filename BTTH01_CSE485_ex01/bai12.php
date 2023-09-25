<?php
 $number = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
 ];

 // Lấy ra phần tử đầu tiên và cuối cùng
 $firstElement = reset($number);
 echo "Phần tử đầu tiên:" . $firstElement . '<br/>';
 $lastElement = end($number);
 echo "Phần tử đầu tiên:" . $lastElement . '<br/>';


 //Tìm số lớn nhất, số nhỏ nhất, tổng các giá trị từ mảng trên
 $maxValue = max($number);
 echo "Số lớn nhất:" .$maxValue . '<br/>'; 
 $minValue = min($number);
 echo "Số nhỏ nhất:" .$minValue . '<br/>';
 $sum = array_sum($number);
 echo "Tổng các giá trị:" .$sum . '<br/>';

 // Sắp xếp mảng theo chiều tăng, giảm giá trị
 echo "Mảng theo chiều tăng dần giá trị: ";
 asort($number);
 print_r ($number);
 echo '<br/>';
 
 echo "Mảng theo chiều giảm dần giá trị: ";
 arsort($number);
 print_r ($number);
 echo '<br/>';

 // Sắp xếp mảng theo chiều tăng, giảm các key
 echo "Mảng theo chiều tăng các key: ";
 ksort($number);
 print_r ($number);
 echo '<br/>';

 echo "Mảng theo chiều giảm các key: ";
 krsort($number);
 print_r ($number);
 
?>
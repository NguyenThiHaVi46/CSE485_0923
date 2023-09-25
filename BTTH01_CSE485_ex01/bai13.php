<?php
  $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

//   Tính toán giá trị trung bình của mảng trên
$avg = array_sum($numbers) / count ($numbers);
echo "Giá trị trung bình của mảng trên: " . $avg . '<br/>';

//Liệt kê các số có giá trị lớn hơn giá trị trung bình đó 
$largeAvg = [];
foreach ($numbers as $number) {
    if($number > $avg){
        $largeAvg[] = $number;
    }
}
echo "Các số lớn hơn giá trị trung bình: " . implode(', ', $largeAvg) . '<br/>';
// Liệt kê các số có giá trị nhỏ hơn hoặc bằng giá trị trung bình đó
$smallAvg = [];
foreach ($numbers as $number){
    if($number <= $avg){
        $smallAvg[] = $number;
    }
}
echo "Các số nhỏ hơn giá trị trung bình: " .implode(', ', $smallAvg) . '<br/>';
?>
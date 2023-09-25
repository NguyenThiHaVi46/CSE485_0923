<?php
 $arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
 function calculateOperations($arr) {
    $sum = array_sum($arr); // Tính tổng các phần tử trong mảng
    $product = array_product($arr); // Tính tích các phần tử trong mảng

    $diff = $arr[0]; // Gán giá trị khởi tạo là phần tử đầu tiên trong mảng
    $div = $arr[0]; // Gán giá trị khởi tạo là phần tử đầu tiên trong mảng

    $length = count($arr);
    for ($i = 1; $i < $length; $i++) {
        $diff -= $arr[$i]; // Tính hiệu các phần tử trong mảng
        $div /= $arr[$i]; // Tính thương các phần tử trong mảng
    }

    return [
        'sum' => $sum,
        'product' => $product,
        'difference' => $diff,
        'quotient' => $div,
    ];
}

$result = calculateOperations($arrs);

// In kết quả
echo "Tổng: " . $result['sum'] . "<br>";
echo "Tích: " . $result['product'] . "<br>";
echo "Hiệu: " . $result['difference'] . "<br>";
echo "Thương: " . $result['quotient'] . "<br>";
?>

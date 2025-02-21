<?php
function maytinh($a, $b, $phepTinh) {
    switch($phepTinh) {
        case 'cộng':
            return $a + $b;
        case 'trừ':
            return $a - $b;
        case 'nhân':
            return $a * $b;
        case 'chia':
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Lỗi: Không thể chia cho 0!";
            }
        default:
            return "Lỗi: Phép toán không hợp lệ!";
    }
}
$a = 5;
$b = 5;
$phepTinh = 'cộng';  

echo "Kết quả: " . maytinh($a, $b, $phepTinh);
?>
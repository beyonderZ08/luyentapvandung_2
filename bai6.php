<?php
function kiemtranamnhuan($nam) {
    if (($nam % 4 == 0 && $nam % 100 != 0) || $nam % 400 == 0) {
        return true;
    }
    return false;
}
// Ví dụ gọi hàm
$nam = 2025;
if (kiemtranamnhuan($nam)) {
    echo "Năm $nam là năm nhuận.";
} else {
    echo "Năm $nam không phải là năm nhuận.";
}
?>
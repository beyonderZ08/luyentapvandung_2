<?php
function kiemTraSoNguyenTo($n) {
    // Số nguyên tố là số lớn hơn 1 và chỉ chia hết cho 1 và chính nó
    if ($n <= 1) {
        return false; // Số nhỏ hơn hoặc bằng 1 không phải là số nguyên tố
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false; // Nếu n chia hết cho i, thì không phải số nguyên tố
        }
    }
    return true;
}

// Ví dụ gọi hàm
$n = 5; 
if (kiemTraSoNguyenTo($n)) {
    echo "Số $n là số nguyên tố.";
} else {
    echo "Số $n không phải là số nguyên tố.";
}
?>
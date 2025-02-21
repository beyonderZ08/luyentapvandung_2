<?php
function tachChuoi($chuoi, $kyTuPhanCach) {
    // Sử dụng hàm explode để tách chuỗi thành mảng
    return explode($kyTuPhanCach, $chuoi);
}

// Ví dụ gọi hàm
$chuoi = "ski,skibidi,skibidisigma,skibiditoilet"; // Thay đổi chuỗi ở đây
$kyTuPhanCach = ",";  // Ký tự phân cách
$mangPhanTach = tachChuoi($chuoi, $kyTuPhanCach);

echo "Mảng sau khi tách chuỗi là: ";
print_r($mangPhanTach);
?>
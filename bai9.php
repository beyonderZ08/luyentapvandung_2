<?php
function demkytuxuathien($chuoi, $kyTu) {
    // Dùng hàm substr_count để đếm số lần xuất hiện của ký tự trong chuỗi
    return substr_count($chuoi, $kyTu);
}
// Ví dụ gọi hàm
$chuoi = "tao la nguyen khanh toan";
$kyTu = "o";
echo "Số lần xuất hiện của ký tự '$kyTu' trong chuỗi là: " . demkytuxuathien($chuoi, $kyTu);
?>

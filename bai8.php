<?php
function chuyendoinHoa($chuoi) {
    // Sử dụng hàm strtoupper để chuyển toàn bộ chuỗi thành chữ in hoa
    return strtoupper($chuoi);
}

// Ví dụ gọi hàm
$chuoi = "mot hai ba bon nam sau tay tam"; 
$chuoiInHoa = chuyendoinHoa($chuoi);

echo "Chuỗi sau khi chuyển đổi thành chữ in hoa là: $chuoiInHoa";
?>
<?php
function daonguocChuoi($chuoi) {
   
    return strrev($chuoi);
}
$chuoi = "3456"; 
$chuoidaoNguoc = daonguocChuoi($chuoi);

echo "Chuỗi đảo ngược của '$chuoi' là: '$chuoidaoNguoc'";
?>
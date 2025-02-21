<?php
function kiemtrasochanLe($n) {
    if ($n % 2 == 0) {
        return "Số $n là số chẵn.";
    } else {
        return "Số $n là số lẻ.";
    }
}
$n = 5;
echo kiemtrasochanLe($n);
?>
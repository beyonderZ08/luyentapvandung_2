<?php
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}
$n = 9;
echo "Số Fibonacci thứ $n là: " . fibonacci($n);
?>

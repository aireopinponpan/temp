<?php
    function sum($a, $b) {
        $result = 0;
        for ($i = $a; $i <= $b; $i++) {
            $result = $result + $i;
        }
        return $result;
    }
    $sum1 = sum(1, 9);
    $sum2 = sum(1, 1000);
    $sum3 = sum(1000, 9999);
    print $sum1 . PHP_EOL;
?>

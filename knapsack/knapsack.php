<?php

function knapsack($W, $weights, $values, $n) {
    // جدول برنامه‌نویسی پویا: n+1 ردیف، W+1 ستون
    $dp = array();

    // مقداردهی اولیه جدول
    for ($i = 0; $i <= $n; $i++) {
        $dp[$i] = array();
        for ($w = 0; $w <= $W; $w++) {
            if ($i == 0 || $w == 0) {
                $dp[$i][$w] = 0;
            } else {
                $dp[$i][$w] = 0; // مقدار پیش‌فرض
            }
        }
    }

    // پر کردن جدول بر اساس رابطه بازگشتی
    for ($i = 1; $i <= $n; $i++) {
        for ($w = 1; $w <= $W; $w++) {
            if ($weights[$i - 1] <= $w) {
                $dp[$i][$w] = max(
                    $values[$i - 1] + $dp[$i - 1][$w - $weights[$i - 1]],
                    $dp[$i - 1][$w]
                );
            } else {
                $dp[$i][$w] = $dp[$i - 1][$w];
            }
        }
    }

    // بیشترین ارزش ممکن
    return $dp[$n][$W];
}

// مثال:
$values = [60, 100, 120]; // ارزش‌ها
$weights = [10, 20, 30];  // وزن‌ها
$capacity = 50;           // ظرفیت کوله‌پشتی
$n = count($values);      // تعداد آیتم‌ها

echo "Maximum value in knapsack = " . knapsack($capacity, $weights, $values, $n);

?>

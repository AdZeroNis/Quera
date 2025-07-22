<?php 

$n = intval(readline());

for($i=0;$i<=100;$i++){
       if ($i >= $n) {
        if ($i % 2 == 1) {
            echo "Payin Barare"; // چون نوبت بالا برره‌ای‌ها بود
        } else {
            echo "Bala Barare"; // چون نوبت پایین برره‌ای‌ها بود
        }
        break;
    }
   }
?>
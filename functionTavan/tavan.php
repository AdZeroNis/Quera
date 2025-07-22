<?php  

function myPow($base,$exp){
    
  return pow($base,$exp);
}

$base = (float) readline("عدد اعشاری Base را وارد کنید: ");
$exp = (int) readline("عدد صحیح exp را وارد کنید: ");
$result = myPow($base, $exp);
echo  number_format($result,3);

?>
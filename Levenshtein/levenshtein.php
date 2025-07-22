<?php 

function myLevenshtein($string1 , $string2)
{
      $s1 = strlen($string1);
      $s2 = strlen($string2);

      $db=array();

      for($i=0;$i<=$s1;$i++)
      {
         $db[$i]=array();
        for($j=0;$j<=$s2;$j++)
        {
            if($i==0)
            {
                $db[$i][$j]=$j;

            }elseif($j==0)
            {
                $db[$i][$j]=$i;
            }else{
                 $db[$i][$j]=0;
            }
        }
      }
       for($i=1;$i<=$s1;$i++){
         for($j=1;$j<=$s2;$j++)
         {
            $cost = ($string1[$i-1]==$string2[$j-1])? 0 : 1;

            $db[$i][$j] = min(
                $db[$i - 1][$j] + 1,      // حذف
                $db[$i][$j - 1] + 1,      // درج
                $db[$i - 1][$j - 1] + $cost
            );
         }
       }
  return $db[$s1][$s2];

}
$string1 = "kitten";
$string2 = "sitting";
echo "Levenshtein Distance: " . myLevenshtein($string1, $string2);










?>
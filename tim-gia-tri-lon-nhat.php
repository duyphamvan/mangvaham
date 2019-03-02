<?php
     function maxNumber($arr)
     {
         $arr = [[10,11,4],[4,2,6],[3,8,9]];
         $max = $arr[0][0];
         for ($i=0; $i <count($arr) ; $i++) { 
             for ($j=0; $j <count($arr[$i]) ; $j++) { 
                 if ($arr[$i][$j]>$max) {
                     $max = $arr[$i][$j];
                 }
             }
            
         }
         return $max;
     }
     echo maxNumber($arr);
 ?>

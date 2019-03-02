
    <?php
        $arr = [[10,11,4],[4,2,6],[3,8,9]];
        $index1 = 0;
        $index2 = 0;
        function minNumber($arr)
        {
            
            $min = $arr[0][0];
            
            for ($i=0; $i <count($arr) ; $i++) { 
                for ($j=0; $j <count($arr[$i]); $j++) { 
                    if ($arr[$i][$j]< $min) {
                        $min = $arr[$i][$j];
                        $index1 =$i;
                        $index2 =$j;
                    }
                }
               
            }
            echo 'The smallest number is '.$min.' in the position '.$index1.$index2;
            //return $min;
        }
        minNumber($arr);
    ?>

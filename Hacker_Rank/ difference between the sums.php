<?php
    function differenceSum($arr){
        $n = count($arr);
        $leftSum = 0;
        $rightSum = 0;
        for($i=0; $i < $n; $i++){
            for($j = 0 ; $j < $n; $j++){
                if($i == $j){
                    $leftSum+= $arr[$i][$j];
                }
                if($i == $n-$j-1){
                    $rightSum+= $arr[$i][$j];
                }
            }
        }

        return abs($leftSum - $rightSum);
    }

    echo (differenceSum([
        [1,2,3],
        [2,3,4],
        [3,4,1]
    ]));
?>
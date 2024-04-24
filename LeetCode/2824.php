<?php
    function CountPairs($nums, $target){
        $n = count($nums);
        $count = 0;

        for($i = 0; $i < $n; $i++){
            for($j = $i+1; $j < $n; $j++){
                if($nums[$i] + $nums[$j] < $target){
                    $count++;
                }
            }
        }

        return $count;
    }

    print_r(CountPairs([2,1,3,4,1,4], 6));
?>
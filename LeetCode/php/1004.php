<?php
    function longestOnes($nums, $k) {
        $maxCount = 0;
        $zeroCount = 0 ;
        $left = 0; 

        for($right = 0; $right < count($nums); $right++){
            if($nums[$right] == 0){
                $zeroCount++;
            }

            if($zeroCount > $k){
                if($nums[$left] == 0){
                    $zeroCount--;
                }
                $left++;
            }

            $maxCount = max($maxCount, $right-$left+1);
        }
        return $maxCount;
    }

    longestOnes([1,1,1,0,0,0,1,1,1,1,0], 2)
?>
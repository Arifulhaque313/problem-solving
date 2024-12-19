<?php
    function longestSubarray($nums) {
        $maxCount = 0;
        $zeroCount = 0 ;
        $left = 0; 

        for($right = 0; $right < count($nums); $right++){
            if($nums[$right] == 0){
                $zeroCount++;
            }

            while($zeroCount > 1){
                if($nums[$left] == 0){
                    $zeroCount--;
                }
                $left++;
            }

            $maxCount = max($maxCount, $right-$left);
        }
        return $maxCount;

    }

    longestSubarray([1,1,0,1]);

?>
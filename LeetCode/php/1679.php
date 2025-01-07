<?php
    function maxOperations($nums, $k) {
        $left = 0; 
        $right = count($nums) - 1; 
        $count = 0; 


        sort($nums);

        while ($left < $right) {
            if($nums[$left] + $nums[$right] === $k){
                $count++;
                $left++;
                $right--;
            }else if($nums[$left] + $nums[$right] < $k){
                $left++;
            }else if($nums[$left] + $nums[$right] > $k){
                $right--;
            }
        }

        return $count; 
    }

    maxOperations([1,2,3,4], 5);

?>
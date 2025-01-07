<?php
    function maxArea($height) {
        $length = count($height);
        $left = 0;
        $right = $length-1;
        $max = 0; 

        while ($left < $right) {
            $max_index = min($height[$left], $height[$right]);
            $temp = $max_index * ($right-$left);

            if($max < $temp){
                $max = $temp;
            }

            if($height[$left] <= $height[$right]){
                $left++;
            }else if($height[$left] >= $height[$right]){
                $right--;
            }
        }
        return $max; 
    }

    maxArea([1,8,6,2,5,4,8,3,7])
?>
<?php
    function search($nums, $target) {
        $n = count($nums);
        $left = 0; 
        $right = $n-1;

        while($left <= $right) {
            $mid = floor(($left+$right) / 2);

            if($nums[$mid] == $target) {
                return $mid;
            }
            if($nums[$mid] < $target) {
                $left = $mid+1;
            }else{
                $right = $mid-1;
            }
        }

        return -1;
    }

    search([-1,0,3,5,9,12], 9)

?>
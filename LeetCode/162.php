<?php
    function findPeakElement($nums) {
        $n = count($nums);
        $left = 0;
        $right = $n; 
        
        while($left < $right){
            $mid = floor(($left+$right)/2);

            if($nums[$mid] < $nums[$mid+1]){
                $left = $mid+1;
            }else{
                $right = $mid;
            }
        }

        return $left;
    }


?>
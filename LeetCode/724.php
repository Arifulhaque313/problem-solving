<?php
    function pivotIndex($nums) {
        $sum = array_sum($nums);
        $length = count($nums);
        $left = 0; 


        for($i = 0; $i < $length; $i++) {
            $temp = $sum - ($left+$nums[$i]);
            if($temp == $left){
                return $i; 
                break;
            }
            $left+=$nums[$i];
        }

        return -1 ;
    }
?>
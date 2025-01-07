<?php
    function moveZeroes($nums) {
        $length = count($nums);
        $left = 0; 
        $right = 0; 
        
        for($right; $right < $length; $right++){
            if($nums[$right] !== 0 ){
                $temp = $nums[$left];
                $nums[$left] = $nums[$right];
                $nums[$right] = $temp;
                $left++;
            }
        }

        return $nums;
    }

    print_r(moveZeroes([0,1,0,3,12]))

?>
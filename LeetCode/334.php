<?php
    function increasingTriplet($nums) {
        $result = false;
        $length = count($nums);

        for($i = 1; $i < $length-1; $i++) {
            if($nums[$i-1] < $nums[$i] && $nums[$i] < $nums[$i+1]){
                $result = true;
                break;
            }else{
                $result = false;
            }
        }

        return $result;
    }

    increasingTriplet([20,100,10,12,5,13])

?>
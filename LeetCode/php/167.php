<?php
    function twoSum($numbers, $target) {
        for($i = 1; $i < count($numbers); $i++ ){
            if($numbers[0] + $numbers[$i] == $target){
                return [1, $i+1];
            }
        }

        return [];
    }

    twoSum([-1,0], -1);

?>
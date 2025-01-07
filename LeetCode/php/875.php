<?php
    function minEatingSpeed($piles, $h) {
        $left = 1; 
        $right = max($piles);

        while($left < $right) {
            $mid = floor(($left+$right) / 2);

            $hourSpent = 0;

            foreach($piles as $pile) {
                $hourSpent += ceil($pile/$mid);
            }

            if($hourSpent > $h){
                $left = $mid+1;
            }else{
                $right = $mid;
            }
        }
        echo $left;
    }

    minEatingSpeed([3,6,7,11], 8);
?>
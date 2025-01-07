<?php
    function reverse($A){
        $N = count($A);

        for($i = $N; $i >= 0; $i--){
            return $A[$i];
        }
    }


    reverse([2,1,3,6]);
?>
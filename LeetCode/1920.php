<?php
    function permutation(&$nums){
        for($i = 0; $i < count($nums); $i++){
            $nums[$i] = $nums[$nums[$i]];
        }
    }

    $arr = array(0,2,3,1,4,5);
    permutation($arr);

    print_r($arr);
?>
<?php

use LDAP\Result;

    function targetIndicates(&$nums, $target)
    {
        $n = count($nums);
        $sorted = sort($nums);
        $targetIndes = [];

        for($i = 0; $i < $n ; $i++)
        {
            if($nums[$i] == $target){
                $targetIndes [] = $i;
            }
        }

        return $targetIndes;
    }

    $nums = array(5,3,2,12,9,4,2);
    print_r(targetIndicates($nums, 2));
o
?>
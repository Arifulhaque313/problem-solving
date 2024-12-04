<?php
    function kidsWithCandies($candies, $extraCandies) {
        $max = max($candies);
        $result = [];

        foreach($candies as $candie){
            $candie+$extraCandies >= $max ? $result[]= true : $result[] = false;
        }

        return $result;
    }

    print_r(kidsWithCandies([2,3,5,1,3], 3));

?>
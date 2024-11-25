<?php
    function findMedianSortedArrays($nums1, $nums2) 
    {
        $result = 0;
        $final_array = array_merge($nums1, $nums2);
        $length = count($final_array);
        sort($final_array);
        
        $right = ($length/2);
        $right = round($right);
        $left = $right-1;
        $left = round($left);


        if($length % 2 == 0)
        {
            $total = $final_array[$right] + $final_array[$left];
            $result = $total / 2; 

            return $result;
        }

        else
        {
            return $final_array[$right-1];
        }

    }

    echo (findMedianSortedArrays([1,2,3],[2,3]));
?>
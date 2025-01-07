<?php
    function intersection($nums1, $nums2) {
        $result=array_intersect($nums1,$nums2);
        $result = array_values(array_unique($result));

        return $result;
    }

    intersection([1,2,3],[4,3,2]);
?>
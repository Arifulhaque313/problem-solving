<?php
    function findDifference($nums1, $nums2) {
        $a2 = array_diff($nums1, $nums2);
        $a1 = array_diff($nums2, $nums1);

        $result = [array_unique($a2), array_unique($a1)];

        return $result;
    }

    findDifference([1,2,3,4], [3,2,2,2,6,7,8]);
?>
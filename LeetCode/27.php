<?php
    function removeElement($nums, $val) {
        $newArr = array_diff($nums, [3]);

        return count($newArr);
    }

    removeElement([3,2,2,3], 3);
?>
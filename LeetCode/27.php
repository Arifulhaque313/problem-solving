<?php
    function removeElement($nums, $val) {
        return count(array_diff($nums, [$val]));
    }

    removeElement([3,2,2,3], 3);
?>
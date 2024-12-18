<?php
    function findMaxAverage($nums, $k) {
        $n = count($nums);

        if ($n == 0 || $k > $n) {
            return null;
        }

        $avrSum = array_sum(array_slice($nums, 0, $k));
        $maxAvr = $avrSum / $k; 

        for ($i = 0; $i < $n - $k; $i++) {
            $avrSum = $avrSum - $nums[$i] + $nums[$i + $k];
            $temp = $avrSum / $k;

            if ($maxAvr < $temp) {
                $maxAvr = $temp;
            }
        }

        return $maxAvr;
    }   

    findMaxAverage([5], 1);

?>
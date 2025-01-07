<?php
    function minimizeTreePartition($parent, $file_size) {
        $n = count($parent);

        $cumulative_size= $file_size;
    
        for ($i = $n - 1; $i >= 1; $i--) {
            $cumulative_size[$$parent[$i]] += $cumulative_size[$i];
        }
    
        $total_size = $cumulative_size[0];
    
        $min_diff = PHP_INT_MAX;
        for ($i = 1; $i < $n; $i++) {
            $cut_size = $cumulative_size[$i];
            $remaining_size = $total_size - $cut_size;
            $diff = abs($cut_size - $remaining_size);
            $min_diff = min($min_diff, $diff);
        }
    
        return $min_diff;
    }

    $p = [-1, 0, 0, 1, 1, 2];
    $fs = [1, 2, 2, 1, 1, 1];
    
    echo minimizeTreePartition($p, $fs);
    

?>
<?php
    function isSubsequence($s, $t) {
        $i = 0; 
        $j = 0; 

        while($i < strlen($s) && $j < strlen($t)) {
            if($s[$i] == $t[$j]) {
                $j++;
            }
            $i++;
        }
        return $j == strlen($t) ? true : false;
    }
?>
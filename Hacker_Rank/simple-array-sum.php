<?php
    function arraySum($ar){
        $n = count($ar);
        $sum = 0 ;
        for($i = 0; $i < $n; $i++){
            $sum += $ar[$i];
        }

        return $sum;
    }

   echo(arraySum([1,2,3,4,5]));
?>
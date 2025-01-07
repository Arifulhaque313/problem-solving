<?php
    function BigSum($ar){
        $n = count($ar);
        $sum = 0;

        foreach($ar as $a){
            $sum+= $a;
        }
        
        return $sum;
    }


    echo(BigSum([1000000001,1000000002,1000000003,1000000004,1000000005]));
?>
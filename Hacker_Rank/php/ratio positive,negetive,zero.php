<?php
    function ratio($arr){
        $n = count($arr);

        $positive = 0;
        $negetive = 0;
        $zero = 0;
        foreach($arr as $a){
            if($a > 0){
                $positive++;
            }
            if($a < 0){
                $negetive++;
            }
            if($a == 0){
                $zero++;
            }
        }

        $positive /= $n;
        $negetive /= $n;
        $zero /= $n;

        $positive = sprintf("%.6f", $positive);
        $negetive = sprintf("%.6f", $negetive);
        $zero = sprintf("%.6f", $zero);
        
        echo $positive . "\n" . $negetive . "\n" . $zero;
    }


    print_r (ratio([-4,3,-9,0,4,1]));
?>
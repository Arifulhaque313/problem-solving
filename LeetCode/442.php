<?php
    function findDublicates($nums){
        $n = count($nums);
        sort($nums);

        $dublicates = [];
        
        for($i = 0; $i< $n ; $i++){
            if ($nums[$i]==$nums[$i+1]){
                array_push($dublicates,$nums[$i]);
            }
        }

        return $dublicates;
    }



    print_r(findDublicates([4,3,2,7,8,2,3,3,1]));
?>
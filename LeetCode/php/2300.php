<?php
    function successfulPairs($spells, $potions, $success) {
     $result =[];
     $count = 0;
     
     for($i = 0; $i < count($spells); $i++){
        $count = 0; 
        foreach($potions as $pos){
            if($pos * $spells[$i] >= $success){
                $count++;
            }
        }
        $result[$i] = $count;;
     }

     return $result;
    }

    successfulPairs([3,2,1], [8,5,8], 16);

?>
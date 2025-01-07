<?php
    function canPlaceFlowers($flowerbed, $n) {
        $count = 0;
        
        array_unshift($flowerbed, 0);
        array_push($flowerbed,0);

        for($i=1; $i<count($flowerbed)-1; $i++) {
            if($flowerbed[$i-1] == 0 && $flowerbed[$i] == 0 && $flowerbed[$i+1] == 0){
                $flowerbed[$i] = 1;
                $count++;
            }
        }

        return $count >= $n;
    }

    print_r(canPlaceFlowers([1,0,0,0,1], 2));
?>
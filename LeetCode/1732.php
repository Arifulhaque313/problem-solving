<?php
    function largestAltitude($gain) {
        
        $currentAltitude = 0; 
        $maxAltitude = 0;
        
        foreach($gain as $g){
            $currentAltitude += $g;
            $maxAltitude = max($currentAltitude, $maxAltitude);
        }

        return $maxAltitude;
    }

    largestAltitude([-5,1,5,0,-7]);
?>
<?php
     function smallerNumbersThanCurrent($nums) 
     {
        $n = count($nums);

        $newArray = [];

        $count = 0;

        for($i = 0; $i < $n; $i++)
        {   
            $count = 0;
            for($j = 0; $j < $n; $j++)
            {
                if($nums[$i] > $nums[$j]){
                    $count++;
                }
            }

            $newArray[] = $count;
        }

        return $newArray;
        
     }


     smallerNumbersThanCurrent([8,1,23,3]);
?>
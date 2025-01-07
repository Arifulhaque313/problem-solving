<?php
    function countNegatives($grid)
    {
        $n = count($grid);
        $negCount = 0;

        for($i = 0; $i < $n; $i++)
        {   
            for($j = 0; $j < count($grid[0]); $j++)
            {
                if($grid[$i][$j] < 0){
                    $negCount+=1;
                }
            }
        }

        return $negCount;
    }


    countNegatives([
        [5,1,0],[-5,-5,-5]
    ]);
?>
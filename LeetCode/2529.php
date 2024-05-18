<?php
    function maximumCount($nums) 
    {
        $n = count($nums);
        $pos = 0;
        $neg = 0;

        for($i = 0; $i < $n; $i++)
        {
            if($nums[$i] > 0)
            {
                $pos++;
            }
            if($nums[$i] < 0) 
            {
                $neg++;
            }
        }

        if($pos > $neg)
        {
            return $pos;
        }
        elseif($pos < $neg)
        {
            return $neg;
        }
        else
        {
            return $pos;
        }

    }

    echo (maximumCount([-2,-1,-5,2,-1,-1,2,0,4]));
?>
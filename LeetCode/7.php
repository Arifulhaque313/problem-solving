<?php
    function ReverseInteger($x)
    {   
        $revnum = 0;  
        while ($x > 1)  
        {  
        $rem = $x % 10;  
        $revnum = ($revnum * 10) + $rem;  
        $x = ($x / 10);   
        }  
        
        return $x > 0 ? $revnum : "-".$revnum;
    }

    print_r(ReverseInteger(-123));
?>
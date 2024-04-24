<?php
    function PerformaingOperation($operations)
    {
        $n = count($operations);
        $x = 0; 

        for($i = 0; $i< $n; $i++)
        {
            if($operations[$i] == "--X" || $operations[$i] == "X--"){
                $x -=1;
            }
            else{
                $x+=1;
            }
        }

        return $x;

    }

    PerformaingOperation(["X++","++X","--X","X--"]);
?>
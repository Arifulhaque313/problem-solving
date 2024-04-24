<?php
    function stringA($s){
        $n = strlen($s);

        $last = $s[0];
        $count = 0;
        
        // for($i = 1; $i<$n ; $i++){
        //     if($last == $s[$i]){
        //         break;
        //     }
        //     else{
        //         $count = $count +1;
        //     }
        // }

        echo ($last == $s[3]);

     ;
    }
    stringA("Hello");
?>
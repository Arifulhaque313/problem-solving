<?php
    function uniqueOccurrences($arr) {
        $counts = [];

        foreach($arr as $num){
            if(isset($arr[$num])){
                $counts[$num]++;
            }else{
                $counts[$num] = 1;
            }
        }


        $uniqueCounts = [];

        foreach($counts as $count){
            if(in_array($count , $uniqueCounts)){
                return false;
                break;
            }else{
                $uniqueCounts[] = $count;
            }
        }

        return true;
    }

?>
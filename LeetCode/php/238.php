<?php
    function productExceptSelf($nums) {
    //     $length = count($nums);
    //     $result = [];
        
    //     for($i = 0; $i < $length; $i++) {
    //         $multi = multiArr($nums, $i);
    //         $result [] = $multi;
    //      }

    //      return $result;
    // }

    // function multiArr($nums, $i){
    //     $temp = null;
    //     foreach($nums as $a){
    //         if($a == $nums[$i]){
    //             continue;
    //         }else{
    //             $temp *= $a;
    //         }
    //     }

    //     return $temp;
    // }

        $result = $nums;
        $total = 1;
        for ($i = 0; $i < count($nums); $i++) {
            $result[$i] = $total;
            $total = $nums[$i] * $total;
        }

        $total = 1;
        for ($i = count($nums) - 1; $i >= 0; $i--) {
            $result[$i] = $total * $result[$i];
            $total = $nums[$i] * $total;
        }

        return $result;
    }

    print_r(productExceptSelf([1,2,3,4]));
?>
<?php
    function SqSortedArray($numbers){
        $result = array_map(function($f){
            return $f*$f; 
        },$numbers);

        $sortredArray = sort($result);

        return $sortredArray;
    }

    $newResult = SqSortedArray([-1, -3,-2, 6, 5, 4]);


    print_r($newResult);



























    // function sortedArray($array){
    //     for($i = 0; $i < count($array); $i++){
    //         $array[$i] = $array[$i] * $array[$i];
    //     }


    //     $n = count($array);

    //     for($i = 0 ; $i< $n; $i++){
    //         $min = $i; 
    //         for($j = $i+1 ; $j < $n; $j++){
    //             if($array[$min] > $array[$j]){
    //                 $min = $j;
    //             }

    //         }

    //         if($array[$i] > $array[$min]){
    //             $temp = $array[$i];
    //             $array[$i] = $array[$min];
    //             $array [$min] = $temp;
    //         }
    //     }

    //     echo $array;

    // }
    
    // $array = array(-1,4,-3,2,6);
    // sortedArray($array);

    // for ($i = 0; $i < count($array); $i++)  
    // echo $array[$i] . " "; 
?>




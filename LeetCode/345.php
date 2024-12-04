<?php
    function reverseVowels($s) {
        $array = str_split($s);
        $vowels = ['a','e','i','o','u','A','E','I','O',"U"];

        $left = 0; 
        $right = count($array)-1;

        while ($left < $right) {
            while ($left < $right && !in_array($array[$left], $vowels) ) {
                $left++;
            }

            while ($left < $right && !in_array($array[$right], $vowels)){
                $right--;
            }

            if($left < $right){
                $temp = $array[$right];
                $array[$right ]= $array[$left];
                $array[$left] = $temp;

                $left++;
                $right--;
            }
        }

        return $array;
    }

    print_r(reverseVowels("leetcode"));
?>
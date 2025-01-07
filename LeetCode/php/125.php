<?php
     function isPalindrome($s) {
        $removeAndLow = strtolower(preg_replace('/[a-zA-Z0-9 ]/', '', $s));

        $converToArray = str_split($removeAndLow);

        $length = count($converToArray);

        $left = 0 ; 
        $right = $length - 1; 

        while ($left <= $right){
            if($converToArray[$left] !== $converToArray[$right]){
                return "false";
            }
            $left++;
            $right--;
        }

        return "true";
     }


    print_r(isPalindrome("A man, a plan, a canal: Panama"));

?>
<?php
    function mergeAlternately($word1, $word2) {

        $mergeString = "";

        for ($i = 0; $i < max(strlen($word1), strlen($word2)); $i++) {
            if($i < strlen($word1)){
                $mergeString .= $word1[$i] ;
            }

            if($i < strlen($word2)){
                $mergeString .= $word2[$i] ;
            }
        }


        return $mergeString;
        // return max(strlen($word1), strlen($word2));
    
    }

    
    echo (mergeAlternately("abc", "de"));

?>
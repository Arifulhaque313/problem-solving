<?php
    function reverseWords($s) {
        $stringToArray = array_diff(explode(" ", trim($s)), ['']);
        $reverseArray = array_reverse($stringToArray);

        return implode(' ', $reverseArray);
    }


    $result = reverseWords("the name of my country is bangladesh");
    echo $result;
?>
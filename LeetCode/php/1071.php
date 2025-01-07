<?php
    function gcdOfStrings($str1, $str2) {

        $string = '';

        for ($i=1; $i <= strlen($str2); $i++) { 
            $try = substr($str2, 0, $i);

            $remains1 = str_replace($try, '', $str1);
            $remains2 = str_replace($try, '', $str2);

            if ($remains1 === '' && $remains2 === '') {
                $string = $try;
            }
        }

        return $string;

    }

    $result = gcdOfStrings("ABABAB", "CODE");

    echo $result;
?>
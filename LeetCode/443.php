<?php
    function compress($chars) {
        $temp = 0;
    $result = [];

    for ($i = 0; $i < count($chars) - 1; $i++) {
        $value = $chars[$i];
        if ($value == $chars[$i + 1]) {
            $temp++;
        } else {
            $result[] = $value;
            if ($temp > 0) {
                if ($temp + 1 >= 10) {
                    $result[] = intval(($temp + 1) / 10);
                    $result[] = ($temp + 1) % 10;
                } else {
                    $result[] = $temp + 1;
                }
            }
            $temp = 0;
        }
    }

    // Handle the last character separately
    $result[] = $chars[count($chars) - 1];
    if ($temp > 0) {
        if ($temp + 1 >= 10) {
            $result[] = intval(($temp + 1) / 10);
            $result[] = ($temp + 1) % 10;
        } else {
            $result[] = $temp + 1;
        }
    }

    return $result;
    }

   print_r(compress(["a","a","b","b","c","c","c"]));

?>
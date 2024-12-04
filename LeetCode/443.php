<?php
    function compress(&$chars) {
        $anchor = $write = 0;

        for ($read = 0; $read < count($chars); $read++) {
            if ($read + 1 == count($chars) || $chars[$read] != $chars[$read + 1]) {
                $chars[$write++] = $chars[$anchor];
                if ($read > $anchor) {
                    $len = $read - $anchor + 1;
                    if ($len > 1) {
                        $lenStr = strval($len);
                        for ($i = 0; $i < strlen($lenStr); $i++) {
                            $chars[$write++] = $lenStr[$i];
                        }
                    }
                }
                $anchor = $read + 1;
            }
        }

        return $write;
    }

   print_r(compress(["a","a","b","b","c","c","c"]));

?>
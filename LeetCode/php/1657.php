<?php
   public function hashMap($array) {
    $temp = [];
    foreach ($array as $arr) {
        if (isset($temp[$arr])) {
            $temp[$arr]++;
        } else {
            $temp[$arr] = 1;
        }
    }
    return $temp;
}

function closeStrings($word1, $word2) {
    if (strlen($word1) !== strlen($word2)) {
        return false;
    }

    $array1 = str_split($word1);
    $array2 = str_split($word2);

    $freq1 = hashMap($array1);
    $freq2 = hashMap($array2);

    $keys1 = array_keys($freq1);
    $keys2 = array_keys($freq2);

    sort($keys1);
    sort($keys2);

    if ($keys1 !== $keys2) {
        return false;
    }

    sort($freq1);
    sort($freq2);

    return $freq1 === $freq2;
}


?>
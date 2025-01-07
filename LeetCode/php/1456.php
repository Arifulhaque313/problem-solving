<?php
    function maxVowels($s, $k) {
        $n = strlen($s);
        $maxVol = 0;
        $currentVol = 0;

        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $stringToArray = str_split($s);

        for ($i = 0; $i < $k; $i++) {
            if (in_array($stringToArray[$i], $vowels)) {
                $currentVol++;
            }
        }

        $maxVol = $currentVol;

        for ($i = $k; $i < $n; $i++) {
            if (in_array($stringToArray[$i - $k], $vowels)) {
                $currentVol--;
            }
            if (in_array($stringToArray[$i], $vowels)) {
                $currentVol++;
            }
            $maxVol = max($maxVol, $currentVol);
        }

        return $maxVol;
    }

    maxVowels("abciiidef", 3)
?>
<?php
    function guessNumber($n) {
        $left = 0;
        $right = $n;

        for ($i = 1; $i <= $n; $i++) {
            $mid = round(($left + $right) / 2);

            $guess = $this->guess($mid);

            if ($guess === 0) {
                return $mid;
            }

            if ($guess === -1) {
                $right = $mid - 1;
                continue;
            }

            if ($guess === 1) {
                $left = $mid + 1;
                continue;
            }
        }
    }

?>
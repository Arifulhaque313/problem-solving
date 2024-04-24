<?php
    function convertTemp($celsius)
    {
        return array($celsius + 273.15, $celsius * 1.80 + 32.00);
    }

    print_r(convertTemp(36.50));
?>
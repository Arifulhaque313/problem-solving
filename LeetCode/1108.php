<?php
    function DefangingIP($address)
    {   
        $string = explode(".", $address);
        $defangin = implode("[.]", $string);
        
        return $defangin;
    }

    DefangingIP("1.1.1.1");
?>
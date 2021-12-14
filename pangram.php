<?php

    function isPangram($isPangram): bool
    {
        $alphabet = range('a', 'z');
        if (preg_grep($isPangram, $alphabet)){
            
        }

        return strtoupper($isPangram);
    }

?>
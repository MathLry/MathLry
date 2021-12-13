<?php

    $phrase = "help plzz";

    function capsMe($phrase): string
    {
        return strtoupper($phrase);
    }

    function lowerMe($phrase): string
    {
        return strtolower($phrase) ;
    }

    function upperCaseFirst($phrase): string
    {
        return ucwords($phrase) ;
    }

    function lowerCaseFirst($phrase): string
    {
        $result = '';
        $test = explode(' ', $phrase);
        foreach ($test as $i) {
            $i =' '.lcfirst($i);
            $result.= $i;
        }
        return ltrim($result);return ($phrase) ;
    }

    function removeBlankSpace($phrase): string
    {
        return trim($phrase);
    }

?>
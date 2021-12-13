<?php

    $sentence = "help plzz";

    function capsMe($sentence): string
    {
        return strtoupper($sentence);
    }

    function lowerMe($sentence): string
    {
        return strtolower($sentence) ;
    }

    function upperCaseFirst($sentence): string
    {
        return ucwords($sentence) ;
    }

    function lowerCaseFirst($sentence): string
    {
        $result = '';
        $test = explode(' ', $sentence);
        foreach ($test as $i) {
            $i =' '.lcfirst($i);
            $result.= $i;
        }
        return ltrim($result);return ($sentence) ;
    }

    function removeBlankSpace($sentence): string
    {
        return str_replace(' ', '', $sentence);
    }

?>
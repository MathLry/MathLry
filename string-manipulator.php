<?php

    function capsMe($sentence): string
    {
        return $sentence = strtoupper($sentence);
    }

    function lowerMe($sentence): string
    {
        return $sentence = strtolower($sentence) ;
    }

    function upperCaseFirst($sentence): string
    {
        return $sentence = ucfirst($sentence) ;
    }

    function lowerCaseFirst($sentence): string
    {
        return $sentence = lcfirst($sentence) ;
    }

    function removeBlankSpace($sentence): string
    {
        return $sentence = str_replace(' ', '', $sentence);
    }
?>
<?php

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
        return ucfirst($sentence) ;
    }

    function lowerCaseFirst($sentence): string
    {
        return lcfirst($sentence) ;
    }

    function removeBlankSpace($sentence): string
    {
        return str_replace(' ', '', $sentence);
    }
?>
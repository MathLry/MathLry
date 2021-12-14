<?php

    function isPangram(string $test): bool
    {
        $alphabet = range('a', 'z');
        $array = str_split($test);
        foreach ($array as $char) {
            if (ctype_alpha($char)) {
                if (ctype_upper($char)) {
                    $char = strtolower($char);
                }
                $key = array_search($char, $alphabet);
                if ($key !== false) {
                    unset($alphabet[$key]);
                }
            }
        }
        if (!$alphabet) {
            $isPangram = true;
        }
        return $isPangram;
    }
?>
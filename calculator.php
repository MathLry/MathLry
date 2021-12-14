<?php

    function calc(string $str): int {
        eval("\$str = $str");
        return $str;
    }
?>
<?php

    function isPangram($isPangram): bool
    {
        $letters = range('a', 'z');
        foreach ($letters as $letter) {
			if (!strstr($isPangram, $letter))
				return false;
		}
        return true;
    }
?>
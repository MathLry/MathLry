<?php

    function isPangram($isPangram): bool
    {
        $sentences = strtolower(trim($isPangram));
        $letters = range('a', 'z');
        
        foreach ($letters as $letter) {
			if (!strstr($sentences, $letter))
				return false;
		}

        return true;
    }

?>
<?php 

namespace Nathanmac\GUID;

class GUID {
 
    /* 
     *  References
     *      - http://www.php.net/manual/en/function.com-create-guid.php
     *      - http://guid.us/GUID/PHP
     */
    public function generate($prefix = false, $braces = false) {
        mt_srand((double) microtime() * 10000);
        $charid = strtoupper(md5(uniqid($prefix === false ? rand() : $prefix, true)));
        $hyphen = chr(45); // "-"
        $uuid = substr($charid, 0, 8) . $hyphen
                 . substr($charid, 8, 4) . $hyphen
                 . substr($charid, 12, 4) . $hyphen
                 . substr($charid, 16, 4) . $hyphen
                 . substr($charid, 20, 12);
        
        // Add brackets or not? "{" ... "}"
        return $braces ? chr(123) . $uuid . chr(125) : $uuid;
    }
}
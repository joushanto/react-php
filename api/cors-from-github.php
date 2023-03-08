<?php

/**
*   CORS Headers
*   Add CORS headers
*   for every request
*
*   This should be called from the constructor of your base class
*   so that the headers are set on every request
*/
protected function _cors_headers()
{       
    // Allow from any origin
    if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: <<YOUR FULLY QUALIFIED DOMAIN HERE>>");//eg http://example.com
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');// cache for 1 day
    }

    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {            

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");            

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        die();            
    }
}

?>
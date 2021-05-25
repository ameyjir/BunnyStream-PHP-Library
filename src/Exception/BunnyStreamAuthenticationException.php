<?php

namespace Bunny\Stream\Exception;

use Exception;

class BunnyStreamAuthenticationException extends Exception
{
    public function __construct($libraryId, $apiAccessKey, $code = 0, Exception $previous = null)
    {
        parent::__construct("Authentication failed for library '{$libraryId}' with access key '{$apiAccessKey}'.", $code, $previous);
    }
}

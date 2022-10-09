<?php

namespace App\Exceptions;

use Exception;

class ApiException extends Exception
{
    private $statusCode;

    public function __construct($message, $code, Exception $previous = NULL)
    {
        parent::__construct($message, $code, $previous);
        $this->statusCode = $code;
    }

    public function render($request)
    {
        $data = [
            'error' => true,
            'status' => $this->statusCode
        ];
        return response($data)->setStatusCode($this->statusCode);
    }
}

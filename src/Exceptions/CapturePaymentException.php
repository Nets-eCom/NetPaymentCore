<?php

namespace NetsCore\Exceptions;

use Exception;
use Throwable;

class CapturePaymentException extends Exception
{
    private string $additional;

    public function __construct($message = "", $code = 0, $additional = "", Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->additional = $additional;
    }

    public function __toString()
    {
        return __CLASS__ . ": [{$this->getCode()}]: {$this->getMessage()}";
    }

    /**
     * @return string
     */
    public function getAdditional(): string
    {
        return $this->additional;
    }
}
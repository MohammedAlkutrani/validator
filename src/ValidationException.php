<?php 

namespace Validator;

use Exception;

class ValidationException extends Exception
{
    public $errors;

    public function __construct(array $errors)
    {
        $this->errors = $errors;
    }

    public function errors()
    {
        return $this->errors;
    }
}
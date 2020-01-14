<?php 

namespace Validator;

use Exception;

class ValidationException extends Exception
{
    /** 
     * @var $errors
     */
    public $errors;

    /**
     * setting the error property.
     * 
     * @param array $errors.
     * @return void
     */
    public function __construct($errors)
    {
        $this->errors = $errors;
    }

    /**
     * getting the errors.
     * 
     * @return array
     */
    public function errors()
    {
        return $this->errors;
    }
}
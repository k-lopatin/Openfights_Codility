<?php

namespace Service\Api\Exception;

class NoParamsException extends \Exception
{
    protected $message = 'No parameters are set for the request. 
    If there is no need to set parameters, please set parameters as empty array.';
}
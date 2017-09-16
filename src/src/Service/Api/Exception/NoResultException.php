<?php

namespace Service\Api\Exception;

class NoResultException extends \Exception
{
    protected $message = 'There is no result in your request. May be you have not sent your request? 
    Please, call sendRequest() method before trying to get the result.';
}
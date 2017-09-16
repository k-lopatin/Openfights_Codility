<?php

namespace Service\Api;

interface ApiRequestInterface
{
    public function sendRequest() : ApiRequestInterface;
    public function getResult();
}

<?php

namespace Service\Api;


use Service\Api\Exception\NoParamsException;
use Service\Api\Exception\NoResultException;

class CurrentBalanceApiRequest extends AbstractApiRequest
{
    protected $apiName = 'MyCards';
    protected $apiVersion = '1.0.0';
    protected $apiFunction = 'MyCardsInfo/balance';

    protected $params;

    private $result;

    public function sendRequest() : ApiRequestInterface
    {
        $uri = $this->generateUrl();
        $body = $this->generateRequestBody();

        $this->result = \Httpful\Request::post($uri)
            ->body($body)
            ->sendsJson()
            ->send();
        return $this;
    }

    public function getResult()
    {
        if (empty($this->result)) {
            throw new NoResultException();
        }
        return $this->result;
    }

    private function generateRequestBody()
    {
        if (empty($this->params)) {
            throw new NoParamsException();
        }
        return json_encode($this->params);
    }
}

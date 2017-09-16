<?php

namespace Model;

use Service\Api\AbstractApiRequest;

class CurrentBalance
{
    /** @var AbstractApiRequest Сервис выполняющий запрос к АПИ. */
    private $request;

    private $cardId;

    public function __construct(AbstractApiRequest $request)
    {
        $this->request = $request;
    }

    public function setCardId(string $cardId) {
        $this->cardId = $cardId;
        return $this;
    }

    public function getCurrentBalance() : float
    {
        $result = $this->request->setParams([
            'CardId' => $this->cardId
        ])->sendRequest()->getResult();
        return (float) $this->getBalanceFromJson($result);
    }

    private function getBalanceFromJson(string $jsonResult) {
        $json = json_decode($jsonResult);
        return $json->CardBalance[0]->Value;
    }
}

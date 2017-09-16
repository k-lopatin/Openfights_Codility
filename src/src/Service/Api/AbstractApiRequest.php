<?php

namespace Service\Api;

abstract class AbstractApiRequest implements ApiRequestInterface
{
    protected $apiName;
    protected $apiVersion;
    protected $apiFunction;

    protected $params;

    public function setParams($params) {
        $this->params = $params;
        return $this;
    }

    public function generateUrl()
    {
        global $app;
        return $app['open_api.base_uri'] .
            $this->apiName .
            '/' .
            $this->apiVersion .
            '/' .
            $this->apiFunction .
            '/';
    }
}

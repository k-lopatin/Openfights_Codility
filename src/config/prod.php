<?php

// configure your app for the production environment

$app['twig.path'] = array(__DIR__.'/../templates');
$app['twig.options'] = array('cache' => __DIR__.'/../var/cache/twig');

$app['open_api.base_uri'] = 'https://api.open.ru/';

/*
 * DI.
 */
$app['CurrentBalanceApiRequest'] = function () {
    return new \Service\Api\CurrentBalanceApiRequest();
};

$app['CurrentBalanceModel'] = function ($app) {
    return new Model\CurrentBalance($app['CurrentBalanceApiRequest']);
};

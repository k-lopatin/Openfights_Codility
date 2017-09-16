<?php

use Silex\WebTestCase;

class controllersTest extends WebTestCase
{
    public function testGetCurrentBalance()
    {
        $currBalance = $this->app['CurrentBalanceModel'];
        $balance = $currBalance->setCardId('42')->getCurrentBalance();
        $this->assertEquals(52000.00, $balance, 'Incorrect balance');
    }

    public function createApplication()
    {
        $app = require __DIR__.'/../src/app.php';
        require __DIR__.'/../config/dev.php';
        require __DIR__.'/../src/controllers.php';
        $app['session.test'] = true;

        return $this->app = $app;
    }
}

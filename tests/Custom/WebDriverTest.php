<?php

namespace Behat\Mink\Tests\Driver\Custom;

use Behat\Mink\Driver\Selenium4Driver;
use Behat\Mink\Tests\Driver\TestCase;

class WebDriverTest extends TestCase
{
    public function testGetWebDriverSessionId()
    {
        $session = $this->getSession();
        $session->start();
        /** @var Selenium4Driver $driver */
        $driver = $session->getDriver();
        $this->assertNotEmpty($driver->getWebDriverSessionId(), 'Started session has an ID');

        $driver = new Selenium4Driver();
        $this->assertNull($driver->getWebDriverSessionId(), 'Not started session don\'t have an ID');
    }
}

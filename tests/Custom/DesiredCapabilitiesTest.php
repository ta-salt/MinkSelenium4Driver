<?php

namespace Behat\Mink\Tests\Driver\Custom;

use Behat\Mink\Driver\Selenium4Driver;
use Behat\Mink\Tests\Driver\TestCase;

class DesiredCapabilitiesTest extends TestCase
{
    public function testGetDesiredCapabilities()
    {
        $caps = array(
            'browserName'       => 'firefox',
            'version'           => '30',
            'platform'          => 'ANY',
            'browserVersion'    => '30',
            'browser'           => 'firefox',
            'name'              => 'Selenium2 Mink Driver Test',
            'deviceOrientation' => 'portrait',
            'deviceType'        => 'tablet',
            'selenium-version'  => '2.45.0'
        );

        $driver = new Selenium4Driver('firefox', $caps);
        $this->assertNotEmpty($driver->getDesiredCapabilities(), 'desiredCapabilities empty');
        $this->assertIsArray($driver->getDesiredCapabilities());
        $this->assertEquals($caps, $driver->getDesiredCapabilities());
    }

    public function testSetDesiredCapabilities()
    {
        $caps = array(
            'browserName'       => 'firefox',
            'version'           => '30',
            'platform'          => 'ANY',
            'browserVersion'    => '30',
            'browser'           => 'firefox',
            'name'              => 'Selenium2 Mink Driver Test',
            'deviceOrientation' => 'portrait',
            'deviceType'        => 'tablet',
            'selenium-version'  => '2.45.0'
        );
        $session = $this->getSession();
        $session->start();
        $driver = $session->getDriver();
        \assert($driver instanceof Selenium4Driver);

        $this->expectException('\Behat\Mink\Exception\DriverException');
        $this->expectExceptionMessage('Unable to set desiredCapabilities, the session has already started');
        $driver->setDesiredCapabilities($caps);
    }
}

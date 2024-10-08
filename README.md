Mink Selenium4 (webdriver) Driver
=================================

This package is a fork of an existing package [MinkSelenium2Driver](https://github.com/minkphp/MinkSelenium2Driver)

Usage Example
-------------

``` php
<?php

use Behat\Mink\Mink,
    Behat\Mink\Session,
    Behat\Mink\Driver\Selenium4Driver;

use Selenium\Client as SeleniumClient;

$browser = 'firefox';
$url = 'http://example.com';

$mink = new Mink(array(
    'selenium4' => new Session(new Selenium4Driver($browser, null, $url)),
));

$mink->getSession('selenium4')->getPage()->findLink('Chat')->click();
```

Please refer to [MinkExtension-example](https://github.com/Behat/MinkExtension-example) for an executable example.

Installation
------------

``` json
{
    "require": {
        "behat/mink":                   "~1.5",
        "behat/mink-selenium4-driver":  "~1.0"
    }
}
```

``` bash
$> curl -sS https://getcomposer.org/installer | php
$> php composer.phar install
```

Testing
------------

1. Start WebDriver
    1. If you have Docker installed, run
    ```bash
    docker run -p 4444:4444 selenium/standalone-firefox:2.53.1
    ```
    2. If you do not have Docker, but you have Java
    ```bash
    curl -L https://selenium-release.storage.googleapis.com/2.53/selenium-server-standalone-2.53.1.jar > selenium-server-standalone-2.53.1.jar
    java -jar selenium-server-standalone-2.53.1.jar
    ```
2. Start WebServer by running
    ``` bash
    ./vendor/bin/mink-test-server
    ```
3. Start PhpUnit
    ```bash
    composer require --dev phpunit/phpunit
    ./vendor/bin/phpunit -v --coverage-clover=coverage.clover
    ```

Copyright
---------

Copyright (c) 2012 Pete Otaqui <pete@otaqui.com>.

Maintainers
-----------

* Christophe Coevoet [stof](https://github.com/stof)
* Pete Otaqui [pete-otaqui](https://github.com/pete-otaqui)
* Alexander Obuhovich [aik099](https://github.com/aik099)
* Shu Chen [shuch3n](https://github.com/shuch3n)

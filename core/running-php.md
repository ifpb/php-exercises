# How to run PHP

## PHP terminal

---

```sh
$ cd core/
$ php -f function/sum/code/print/sum.print.php
```

## PHP test

---

### Download composer.phar

```sh
$ wget https://getcomposer.org/composer.phar
$ mv composer.phar /usr/local/bin/composer
```

### Running test

```sh
$ cd core/
$ composer install
$ vendor/bin/kahlan --spec=function/sum/code/
            _     _
  /\ /\__ _| |__ | | __ _ _ __
 / //_/ _` | '_ \| |/ _` | '_ \
/ __ \ (_| | | | | | (_| | | | |
\/  \/\__,_|_| |_|_|\__,_|_| |_|

The PHP Test Framework for Freedom, Truth and Justice.

src directory  :
spec directory : /home/user/code/php-exercises/core/function/sum/code

..                                                                  2 / 2 (100%)



Expectations   : 2 Executed
Specifications : 0 Pending, 0 Excluded, 0 Skipped

Passed 2 of 2 PASS in 0.023 seconds (using 1MB)
```

<!--
TODO test
https://phptherightway.com/#testing
https://www.hongkiat.com/blog/automated-php-test/
https://www.sitepoint.com/8-must-have-php-quality-assurance-tools/
https://www.softwaretestinghelp.com/php-testing-framework-tools/
http://www.evontech.com/what-we-are-saying/entry/7-frameworks-for-automated-php-testing.html
https://kahlan.github.io/docs/index.html (describe-it)
http://peridot-php.github.io (describe-it)
https://github.com/Codeception/Specify (describe-it)
https://github.com/Codeception/Codeception
https://github.com/Codeception/Verify
https://phpunit.de
http://behat.org/en/latest/
-->

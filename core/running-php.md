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
https://www.sitepoint.com/8-must-have-php-quality-assurance-tools/
https://kahlan.github.io/docs/index.html
https://phpunit.de
http://behat.org/en/latest/ 
-->